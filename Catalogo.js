// Product Data (Simple Game Assets)
const products = [
    { id: 1, name: "Script de Movimiento", description: "Un script para mover personajes en tu juego.", price: 5, image: "movement.png" },
    { id: 2, name: "Sistema de Inventario", description: "Un sistema de inventario básico para juegos.", price: 10, image: "backpack.png" },
    { id: 3, name: "Música de Fondo", description: "Canción perfecta para tu juego de aventuras.", price: 8, image: "music.png" },
    { id: 4, name: "Animaciones de Personaje", description: "Animaciones básicas de personajes.", price: 12, image: "jump.png" },
    { id: 5, name: "Sistema de Salud", description: "Un sistema para gestionar la salud del jugador.", price: 7, image: "healing.png" }
];

// Display Products
const productCatalog = document.getElementById('productCatalog');
products.forEach(product => {
    const productDiv = document.createElement('div');
    productDiv.classList.add('product');
    productDiv.innerHTML = `
        <img src="${product.image}" alt="${product.name}">
        <h3>${product.name}</h3>
        <p>${product.description}</p>
        <p>Precio: $${product.price}</p>
        <button onclick="addToCart(${product.id})">Agregar al Carrito</button>
    `;
    productCatalog.appendChild(productDiv);
});

// Cart Management
let cart = [];

// Add Product to Cart
function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    if (product) {
        cart.push(product);
        updateCart();
    }
}

// Update Cart UI
function updateCart() {
    const cartItemsList = document.getElementById('cartItems');
    cartItemsList.innerHTML = '';
    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - $${item.price}`;
        cartItemsList.appendChild(li);
    });
}

document.getElementById('checkoutBtn').addEventListener('click', () => {
    if (cart.length > 0) {
        // Guardar el carrito en el almacenamiento local para acceder a él en la nueva página
        localStorage.setItem('cart', JSON.stringify(cart));
        
        // Redirigir a la página de pago
        window.location.href = 'payment.html';
    } else {
        alert("No hay productos en el carrito.");
    }
});
