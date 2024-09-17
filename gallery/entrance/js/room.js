import * as THREE from "https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.module.js";
import { CSS3DRenderer, CSS3DObject } from "./CSS3DRenderer.js";
import TWEEN from "https://cdnjs.cloudflare.com/ajax/libs/tween.js/18.6.4/tween.esm.min.js";

let scene, camera, renderer, cssRenderer, room, spotLight;
let currentRotation = 0;
let walls = [];
let ambientLight;

function init() {
  scene = new THREE.Scene();
  camera = new THREE.PerspectiveCamera(
    75,
    window.innerWidth / window.innerHeight,
    0.1,
    1000
  );
  renderer = new THREE.WebGLRenderer({ alpha: true });
  renderer.setSize(window.innerWidth, window.innerHeight);
  document.getElementById("room-container").appendChild(renderer.domElement);

  cssRenderer = new CSS3DRenderer();
  cssRenderer.setSize(window.innerWidth, window.innerHeight);
  cssRenderer.domElement.style.position = "absolute";
  cssRenderer.domElement.style.top = "0";
  document.getElementById("room-container").appendChild(cssRenderer.domElement);

  createRoom();
  createLights();
  updateSpotlight();

  camera.position.set(0, 0, 0); // カメラを少し後ろに移動
  camera.lookAt(0, 0, 0);

  document
    .getElementById("leftBtn")
    .addEventListener("click", () => rotateRoom("right"));
  document
    .getElementById("rightBtn")
    .addEventListener("click", () => rotateRoom("left"));

  animate();
}

function createRoom() {
  room = new THREE.Group();

  const aspectRatio = window.innerWidth / window.innerHeight;
  const wallWidth = 0.9;
  const height = wallWidth / aspectRatio;

  const wallGeometry = new THREE.PlaneGeometry(wallWidth, height);
  const floorCeilingGeometry = new THREE.PlaneGeometry(wallWidth, wallWidth);

  const materials = [
    new THREE.MeshPhongMaterial({ color: 0xc6c6c6, side: THREE.DoubleSide }), // 前面
    new THREE.MeshPhongMaterial({ color: 0xc6c6c6, side: THREE.DoubleSide }), // 右側
    new THREE.MeshPhongMaterial({ color: 0xc6c6c6, side: THREE.DoubleSide }), // 背面
    new THREE.MeshPhongMaterial({ color: 0xc6c6c6, side: THREE.DoubleSide }), // 左側
    new THREE.MeshPhongMaterial({ color: 0xdbdbdb, side: THREE.DoubleSide }), // 天井
    new THREE.MeshPhongMaterial({ color: 0x808080, side: THREE.DoubleSide }), // 床
  ];

  walls = [
    {
      name: "front",
      color: 0xff0000,
      position: [0, 0, -0.45],
      rotation: [0, Math.PI, 0],
    },
    {
      name: "right",
      color: 0x8c8c8c,
      position: [0.45, 0, 0],
      rotation: [0, -Math.PI / 2, 0],
    },
    {
      name: "back",
      color: 0x0000ff,
      position: [0, 0, 0.45],
      rotation: [0, 0, 0],
    },
    {
      name: "left",
      color: 0x8c8c8c,
      position: [-0.45, 0, 0],
      rotation: [0, Math.PI / 2, 0],
    },
  ];

  walls.forEach((wallData, index) => {
    const wall = new THREE.Mesh(wallGeometry, materials[index]);
    wall.position.set(...wallData.position);
    wall.rotation.set(...wallData.rotation);
    room.add(wall);

    const linkElement = document.getElementById(`${wallData.name}Link`);
    const cssObject = new CSS3DObject(linkElement);
    cssObject.position.copy(wall.position);

    if (wallData.name === "front" || wallData.name === "back") {
      cssObject.rotation.y = wall.rotation.y + Math.PI;
    } else if (wallData.name === "left") {
      cssObject.rotation.y = Math.PI / 2;
    } else if (wallData.name === "right") {
      cssObject.rotation.y = -Math.PI / 2;
    }

    cssObject.position.z += 0.01; // 壁より少し前に配置
    cssObject.scale.set(0.001, 0.001, 0.001); // サイズを調整
    room.add(cssObject);
    wallData.mesh = wall;
  });

  const isMobile = window.innerWidth <= 500;

  // 床（グレー）
  const floor = new THREE.Mesh(floorCeilingGeometry, materials[5]);
  if (isMobile) {
    floor.position.y = -height / 7; // スマートフォンの場合、高さを1/4に調整
  } else {
    floor.position.y = -height / 2; // デスクトップの場合は変更なし
  }
  floor.rotation.x = Math.PI / 2;
  room.add(floor);

  // 天井（グレー）
  const ceiling = new THREE.Mesh(floorCeilingGeometry, materials[4]);
  if (isMobile) {
    ceiling.position.y = height / 7; // スマートフォンの場合、高さを1/4に調整
  } else {
    ceiling.position.y = height / 2; // デスクトップの場合は変更なし
  }
  ceiling.rotation.x = -Math.PI / 2;
  room.add(ceiling);

  scene.add(room);
}

function createLights() {
  ambientLight = new THREE.AmbientLight(0xffffff, 0.4);
  scene.add(ambientLight);
}

function updateSpotlight() {
  if (walls.length === 0) return;

  walls.forEach((wall, index) => {
    if (!wall || !wall.mesh) return;

    const wallPosition = new THREE.Vector3().copy(wall.mesh.position);
    const wallNormal = new THREE.Vector3(0, 0, -1).applyQuaternion(
      wall.mesh.quaternion
    );

    // 各壁と天井に対してスポットライトを作成
    if (!wall.spotlight) {
      wall.spotlight = new THREE.SpotLight(0xffffff, 1.1);
      wall.spotlight.angle = Math.PI / 4.5;
      wall.spotlight.penumbra = 0.7;
      wall.spotlight.decay = 1.4;
      wall.spotlight.distance = 2.5;
      wall.spotlight.castShadow = true;
      scene.add(wall.spotlight);
      scene.add(wall.spotlight.target);
    }

    // スポットライトの位置を更新
    if (wall.name === "ceiling") {
      wall.spotlight.position.set(0, 0, 0);
      wall.spotlight.target.position.copy(wallPosition);
    } else {
      wall.spotlight.position
        .copy(wallPosition)
        .add(wallNormal.multiplyScalar(0.45));
      wall.spotlight.position.y += 0.4;
      wall.spotlight.target.position.copy(wallPosition);
    }

    wall.spotlight.target.updateMatrixWorld();
    wall.spotlight.updateMatrixWorld();
  });
}

function rotateRoom(direction) {
  const targetRotation =
    direction === "left"
      ? currentRotation + Math.PI / 2
      : currentRotation - Math.PI / 2;

  // 部屋の回転アニメーション
  new TWEEN.Tween(room.rotation)
    .to({ y: targetRotation }, 500)
    .easing(TWEEN.Easing.Quadratic.Out)
    .start();

  // スポットライトの位置アニメーション
  new TWEEN.Tween({ t: 0 })
    .to({ t: 1 }, 1000)
    .easing(TWEEN.Easing.Quadratic.Out)
    .onUpdate(function (object) {
      currentRotation = THREE.MathUtils.lerp(
        currentRotation,
        targetRotation,
        object.t
      );
      updateSpotlight();
    })
    .onComplete(() => {
      currentRotation = targetRotation;
      updateSpotlight();
    })
    .start();
}

function animate(time) {
  requestAnimationFrame(animate);
  TWEEN.update(time);
  renderer.render(scene, camera);
  cssRenderer.render(scene, camera);
}

init();

// ウィンドウリサイズ時の処理を更新
window.addEventListener("resize", function () {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
  renderer.setPixelRatio(window.devicePixelRatio);
  cssRenderer.setSize(window.innerWidth, window.innerHeight);
});
