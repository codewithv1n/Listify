document.addEventListener("DOMContentLoaded", () => {
        const openBtn = document.getElementById('openModalBtn');
        const closeBtn = document.getElementById('closeModalBtn');
        const modal = document.getElementById('formModal');

        
        openBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });

        const closeModal = () => {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        };

        closeBtn.addEventListener('click', closeModal);

       
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                closeModal();
            }
        });
    });