import * as THREE from 'three'
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';


export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
/**
 * Sizes
 */
const canvas = document.querySelector('.webgl')
const sizes = {}
canvas.width = 100*((window.innerWidth-325)/100)
canvas.height = 100*(window.innerHeight/100)
sizes.width = canvas.clientWidth
sizes.height = canvas.clientHeight

window.addEventListener('resize', () =>
{
    canvas.width = (100*(window.innerWidth/100))-325
    canvas.height = 100*(window.innerHeight/100)
    // Save sizes
    sizes.width = canvas.width
    sizes.height = canvas.height

    // Update camera
    camera.aspect = sizes.width / sizes.height
    camera.updateProjectionMatrix()
    // Update renderer
    renderer.setSize(sizes.width, sizes.height)
});


/**
 * Environnements
 */

// Scene
const scene = new THREE.Scene()


// Camera
const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height, 0.1, 100)
camera.position.z = 3
scene.add(camera)


// Logo
const logoLoader = new GLTFLoader()
let logo = null;
logoLoader.load(
    window.wp_object.url,
    function ( gltf ) {
        logo = gltf.scene
        console.log(gltf.scene)
        scene.add(gltf.scene);
    }
)

// Controls
// const controls = new OrbitControls(camera, canvas)
// controls.enabled = false


// Axes Helper
// const axesHelper = new THREE.AxesHelper()
// scene.add(axesHelper)


// Lights
const ambientLight = new THREE.AmbientLight( 'white' );
const pointLight = new THREE.PointLight( 'white', 2, 100 );
pointLight.position.set( 0, 2, 4 );
const pointLight2 = new THREE.PointLight( 'white', 2, 100 );
pointLight2.position.set( -2, 2, -4 );
scene.add( pointLight, pointLight2, ambientLight );



// Renderer
const renderer = new THREE.WebGLRenderer({
    canvas: document.querySelector('.webgl'),
    alpha: true,
});
renderer.setPixelRatio(window.devicePixelRatio)
renderer.setSize(sizes.width, sizes.height)
renderer.setClearColor( 0x181818, 0 ); // the default

/**
 * Mousemove
 */
const cursor = {
    x: 0,
    y: 0,
};

window.addEventListener('mousemove', (event) => {
    cursor.x = event.clientX / sizes.width - 0.5
    cursor.y = event.clientY / sizes.height - 0.5
});

let rotate = false

/**
 * Loop
 */
const animate = () =>
{
    if(logo !== null) {
        canvas.addEventListener( 'mousedown', () => { 
            rotate = true 
        })
        canvas.addEventListener( 'mouseup', () => { 
            rotate = false
        })
        canvas.addEventListener( 'mouseout', () => { 
            rotate = false
        })
        if( rotate == true) {
            logo.rotation.y += Math.sin(cursor.x * Math.PI * 0.05) * 3
        } else {
            logo.rotation.y += Math.PI * 0.005
        }
    }
 
    // Render
    renderer.render(scene, camera)

    // Keep looping
    window.requestAnimationFrame(animate)
}
animate()
  },
};
