// Récupérez tous les boutons Ajouter au panier 
const addToCartButtons = document.querySelectorAll('.addToCart');
// Récupérez le panier depuis le local storage ou créez un tableau vide s'il n'existe pas 
let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
// Ajoutez un événement de clic à chaque bouton 
addToCartButtons.forEach(function(button) { 
    button.addEventListener('click', function() { 
        const productName = button.dataset.product;
        const productPrice = button.dataset.price;
        // Vérifiez si le produit est déjà ajouté au panier
        const existingProduct = cartItems.find(function(item) {
            return item.name === productName;
        });
        
        if (existingProduct) {
            // Si le produit existe déjà dans le panier, incrémente juste la quantité
            existingProduct.quantity++;
        } else {
            // Sinon, créez un nouvel élément de produit et ajoutez-le au panier
            cartItems.push({
            name: productName,
            price: productPrice,
            quantity: 1
            });
        }
        
        // Mettez à jour le panier dans le local storage
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        
        // Incrémentez le nombre dans le badge cart
        const cartBadge = document.getElementById('cart-badge');
        let currentCount = parseInt(cartBadge.innerText);
        currentCount++;
        cartBadge.innerText = currentCount;
    }); 
});

function envoyerCommande() {
    // Récupérez le panier depuis le local storage
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
  
    // Créez une chaîne avec toutes les informations des produits
    const productLines = cartItems.map(function(item) {
      return `- ${item.name} (XAF ${item.price}) x${item.quantity}`
    });
    const message = encodeURIComponent("Je souhaite commander les produits suivants:\n\n" + productLines.join("\n"));
  
    // Redirigez vers WhatsApp avec le message généré
    window.location.href = "whatsapp://send?phone=237696637420&text=" + message;
}