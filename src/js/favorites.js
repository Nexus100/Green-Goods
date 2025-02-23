document.addEventListener('DOMContentLoaded', function() {
    let favoriteCount = 0;
    const favoriteCounter = document.querySelector('.favorite-counter');
    
    // Initialize counter and make it always visible
    favoriteCounter.textContent = '0';
    favoriteCounter.style.display = 'flex';

    document.querySelectorAll('.favorite-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const icon = this.querySelector('i');
            if (icon.classList.contains('fa-regular')) {
                icon.classList.remove('fa-regular');
                icon.classList.add('fa-solid');
                favoriteCount++;
            } else {
                icon.classList.remove('fa-solid');
                icon.classList.add('fa-regular');
                favoriteCount--;
            }
            favoriteCounter.textContent = favoriteCount;
        });
    });
});