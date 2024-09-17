let scene, camera, renderer, room;
let currentRotation = 0;

function init() {
  scene = new THREE.Scene();
  camera = new THREE.PerspectiveCamera(
    75,
    window.innerWidth / window.innerHeight,
    0.1,
    1000
  );
  renderer = new THREE.WebGLRenderer();
  renderer.setSize(window.innerWidth, window.innerHeight);
  document.getElementById("room-container").appendChild(renderer.domElement);

  createRoom();

  camera.position.set(0, 0, 0);
  camera.lookAt(0, 0, 0);

  document
    .getElementById("leftBtn")
    .addEventListener("click", () => rotateRoom("left"));
  document
    .getElementById("rightBtn")
    .addEventListener("click", () => rotateRoom("right"));

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
    new THREE.MeshBasicMaterial({ color: 0xff0000, side: THREE.DoubleSide }), // 赤
    new THREE.MeshBasicMaterial({ color: 0x00ff00, side: THREE.DoubleSide }), // 緑
    new THREE.MeshBasicMaterial({ color: 0x0000ff, side: THREE.DoubleSide }), // 青
    new THREE.MeshBasicMaterial({ color: 0xffff00, side: THREE.DoubleSide }), // 黄
    new THREE.MeshBasicMaterial({ color: 0x808080, side: THREE.DoubleSide }), // グレー（床と天井用）
  ];

  // 前面（赤）
  const frontWall = new THREE.Mesh(wallGeometry, materials[0]);
  frontWall.position.z = -0.45;
  room.add(frontWall);

  // 右面（緑）
  const rightWall = new THREE.Mesh(wallGeometry, materials[1]);
  rightWall.position.x = 0.45;
  rightWall.rotation.y = Math.PI / 2;
  room.add(rightWall);

  // 背面（青）
  const backWall = new THREE.Mesh(wallGeometry, materials[2]);
  backWall.position.z = 0.45;
  backWall.rotation.y = Math.PI;
  room.add(backWall);

  // 左面（黄）
  const leftWall = new THREE.Mesh(wallGeometry, materials[3]);
  leftWall.position.x = -0.45;
  leftWall.rotation.y = -Math.PI / 2;
  room.add(leftWall);

  // 床（グレー）
  const floor = new THREE.Mesh(floorCeilingGeometry, materials[4]);
  floor.position.y = -height / 2;
  floor.rotation.x = Math.PI / 2;
  room.add(floor);

  // 天井（グレー）
  const ceiling = new THREE.Mesh(floorCeilingGeometry, materials[4]);
  ceiling.position.y = height / 2;
  ceiling.rotation.x = -Math.PI / 2;
  room.add(ceiling);

  scene.add(room);
}

function rotateRoom(direction) {
  const targetRotation =
    direction === "left"
      ? currentRotation + Math.PI / 2
      : currentRotation - Math.PI / 2;

  new TWEEN.Tween(room.rotation)
    .to({ y: targetRotation }, 1000)
    .easing(TWEEN.Easing.Quadratic.Out)
    .onComplete(() => {
      currentRotation = targetRotation;
    })
    .start();
}

function animate(time) {
  requestAnimationFrame(animate);
  TWEEN.update(time);
  renderer.render(scene, camera);
}

init();

window.addEventListener("resize", function () {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
});
