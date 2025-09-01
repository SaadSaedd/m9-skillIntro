document.addEventListener('DOMContentLoaded', function() {
    let dragged = null;
    
    const cards = document.querySelectorAll('.photo-card');
    
    cards.forEach(card => {
        card.draggable = true;
        
        card.ondragstart = function(e) {
            dragged = this;
            this.style.opacity = '0.5';
        };
        
        card.ondragend = function() {
            this.style.opacity = '1';
            dragged = null;
        };
        
        card.ondragover = function(e) {
            e.preventDefault();
            this.style.transform = 'scale(1.05)';
        };
        
        card.ondragleave = function() {
            this.style.transform = 'scale(1)';
        };
        
        card.ondrop = function(e) {
            e.preventDefault();
            this.style.transform = 'scale(1)';
            
            if (dragged && dragged !== this) {
                const myFront = this.querySelector('.photo-front img');
                const myBack = this.querySelector('.photo-back img');
                const draggedFront = dragged.querySelector('.photo-front img');
                const draggedBack = dragged.querySelector('.photo-back img');
                
                [myFront.src, draggedFront.src] = [draggedFront.src, myFront.src];
                [myBack.src, draggedBack.src] = [draggedBack.src, myBack.src];
                [myFront.alt, draggedFront.alt] = [draggedFront.alt, myFront.alt];
                [myBack.alt, draggedBack.alt] = [draggedBack.alt, myBack.alt];
            }
        };
    });
});