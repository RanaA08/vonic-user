document.addEventListener('DOMContentLoaded', () => {
    // 1. Contoh: Menambahkan loading state saat form di-submit
    const formVote = document.getElementById('form-vote');
    if (formVote) {
        formVote.addEventListener('submit', function() {
            const submitBtn = document.querySelector('.btn-submit');
            if(submitBtn) {
                submitBtn.innerHTML = 'Menyimpan... <i class="fa-solid fa-spinner fa-spin"></i>';
                submitBtn.disabled = true;
            }
        });
    }

    // 2. Contoh interaksi klik filter (jika diperlukan)
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Logika filter bisa ditambahkan di sini
            console.log('Filter diklik');
        });
    });
});