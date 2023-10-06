document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".slider-image");
    let currentIndex = 0;
  
    function showImage(index) {
      images.forEach((image, i) => {
        if (i === index) {
          image.classList.add("active");
        } else {
          image.classList.remove("active");
        }
      });
      currentIndex = index;
    }
  
    function showNextImage() {
      currentIndex = (currentIndex + 1) % images.length;
      showImage(currentIndex);
    }
  
    function startAutoSlider() {
      setInterval(showNextImage, 3000); // Cambia de imagen cada 3 segundos
    }
  
    // Iniciar el slider automático al cargar la página
    startAutoSlider();
  
    // Mostrar la primera imagen al cargar la página
    showImage(0);
  });
  
  //CARRITO DE COMPRAS
  const productos = [
    { id: 1, nombre: "Producto 1", precio: 10.00 },
    { id: 2, nombre: "Producto 2", precio: 15.00 }
    // Agrega más productos aquí
];

const carrito = [];

function agregarAlCarrito(productoId) {
    const producto = productos.find(item => item.id === productoId);
    carrito.push(producto);
    mostrarCarrito();
}

function mostrarCarrito() {
    const carritoContainer = document.getElementById("carrito");
    carritoContainer.innerHTML = "";
    
    carrito.forEach(producto => {
        const productoDiv = document.createElement("div");
        productoDiv.innerHTML = `${producto.nombre} - $${producto.precio}`;
        carritoContainer.appendChild(productoDiv);
    });
}
