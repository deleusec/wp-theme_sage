// import * as THREE from 'three'
// import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
// import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';


// export default {
//   init() {
//     // JavaScript to be fired on the home page
//   },
//   finalize() {
// /**
//  * Sizes
//  */
// const canvas = document.querySelector('.webgl')
// const sizes = {}
// canvas.width = window.innerWidth-300
// canvas.height = window.innerHeight
// sizes.width = canvas.width
// sizes.height = canvas.height

// window.addEventListener('resize', () =>
// {
//     canvas.width = window.innerWidth-300
//     canvas.height = window.innerHeight
//     // Save sizes
//     sizes.width = canvas.width
//     sizes.height = canvas.height

//     // Update camera
//     camera.aspect = sizes.width / sizes.height
//     camera.updateProjectionMatrix()
//     // Update renderer
//     renderer.setSize(sizes.width, sizes.height)
// });


// /**
//  * Environnements
//  */

// // Scene
// const scene = new THREE.Scene()


// // Camera
// const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height, 0.1, 100)
// camera.position.z = 3
// scene.add(camera)


// // Logo
// const logoLoader = new GLTFLoader()
// logoLoader.load(
//     window.wp_object.url,
//     function ( gltf ) {
//         scene.add(gltf.scene);
//     }
// )


// // Controls
// const controls = new OrbitControls(camera, canvas)
// controls.autoRotate = true
// controls.autoRotateSpeed = 3
// controls.enableZoom = false
// controls.enableDamping = false
// controls.enableKeys = false
// controls.enablePan = false
// controls.rotateSpeed = 1


// // Lights
// const ambientLight = new THREE.AmbientLight( 'white' );
// const pointLight = new THREE.PointLight( 'white', 2, 100 );
// pointLight.position.set( 0, 2, 4 );
// const pointLight2 = new THREE.PointLight( 'white', 2, 100 );
// pointLight2.position.set( -2, 2, -4 );
// scene.add( pointLight, pointLight2, ambientLight );



// // Renderer
// const renderer = new THREE.WebGLRenderer({
//     canvas: document.querySelector('.webgl'),
//     alpha: true,
// });
// renderer.setPixelRatio(window.devicePixelRatio)
// renderer.setSize(sizes.width, sizes.height)
// renderer.setClearColor( 0x181818, 0 ); // the default



// /**
//  * Loop
//  */
// const animate = () =>
// {
//     // Controls update
//     controls.update()
 
//     // Render
//     renderer.render(scene, camera)

//     // Keep looping
//     window.requestAnimationFrame(animate)
// }
// animate()
//   },
// };
