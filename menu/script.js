let cartVisible = false;

function toggleCart() {
    const cart = document.getElementById("cart");
    cartVisible = !cartVisible;
    cart.style.display = cartVisible ? "block" : "none";
}

// Contoh update item di keranjang
function updateCartCount(count) {
    const cartCount = document.getElementById("cart-count");
    cartCount.textContent = count;
}

document.addEventListener('DOMContentLoaded', () => {
    const cart = [];
    const cartItemsElement = document.getElementById('cart-items');
    const totalPriceElement = document.getElementById('total-price');
    const orderButtons = document.querySelectorAll('.order-btn');

    // Fungsi untuk menambahkan item ke keranjang
    const addToCart = (name, price) => {
        const existingItem = cart.find(item => item.name === name);

        if (existingItem) {
            existingItem.quantity++;
        } else {
            cart.push({ name, price, quantity: 1 });
        }

        updateCart();
    };

    // Fungsi untuk memperbarui tampilan keranjang
    const updateCart = () => {
        cartItemsElement.innerHTML = '';
        let totalPrice = 0;

        cart.forEach(item => {
            const li = document.createElement('li');
            li.innerHTML = `
                ${item.name} - Rp.${item.price} x ${item.quantity}
                <button class="remove-btn" data-name="${item.name}">Hapus</button>
            `;
            cartItemsElement.appendChild(li);
            totalPrice += item.price * item.quantity;
        });

        totalPriceElement.textContent = `Rp.${totalPrice}`;
    };

    // Tambahkan event listener ke tombol "Pesan"
    orderButtons.forEach(button => {
        button.addEventListener('click', () => {
            const parentCard = button.parentElement;
            const name = parentCard.querySelector('h3').textContent;
            const priceText = parentCard.querySelector('.price').textContent.replace('Rp.', '').replace('.', '');
            const price = parseInt(priceText, 10);

            addToCart(name, price);
        });
    });

    // Event listener untuk tombol "Hapus"
    cartItemsElement.addEventListener('click', event => {
        if (event.target.classList.contains('remove-btn')) {
            const name = event.target.getAttribute('data-name');
            const itemIndex = cart.findIndex(item => item.name === name);

            if (itemIndex !== -1) {
                cart.splice(itemIndex, 1);
                updateCart();
            }
        }
    });

    // Event listener untuk tombol "Checkout"
    document.getElementById('checkout-btn').addEventListener('click', () => {
        if (cart.length > 0) {
            alert('Checkout berhasil! Anda akan diarahkan ke halaman pembayaran.');
            window.location.href = '../apps/dasboard.php'; // Ganti dengan nama file atau URL halaman lain
        } else {
            alert('Keranjang masih kosong. Silakan tambahkan item terlebih dahulu.');
        }
    });
});
