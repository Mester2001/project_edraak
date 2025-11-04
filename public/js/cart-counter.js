// Function to update cart counter
function updateCartCounter() {
    if (document.getElementById('cartCounter')) {
        // Get current count
        let currentCount = parseInt(document.getElementById('cartCounter').textContent) || 0;
        // Increment by 1 when called
        document.getElementById('cartCounter').textContent = currentCount + 1;
        // Make sure the counter is visible
        document.getElementById('cartCounter').style.display = 'inline-block';
    }
}

// Listen for successful form submission
if (document.forms['addToCartForm']) {
    document.forms['addToCartForm'].addEventListener('submit', function() {
        // This will run after the form is submitted
        setTimeout(updateCartCounter, 1000);
    });
}

// Update counter on page load if user is logged in
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('cartCounter')) {
        // Make sure counter is visible if count > 0
        const count = parseInt(document.getElementById('cartCounter').textContent) || 0;
        if (count > 0) {
            document.getElementById('cartCounter').style.display = 'inline-block';
        } else {
            document.getElementById('cartCounter').style.display = 'none';
        }
    }
});
