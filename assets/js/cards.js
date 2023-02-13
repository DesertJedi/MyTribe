// TODO: When I have internet look up how to make the cards flip around to a comment section
$(function() {
    var Card = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var cards = this.el.find('.card');
        // Evento
        cards.on('click', {el: this.el, multiple: this.multiple}, this.flip)
    }

    Card.prototype.flip = function(e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.card_description').not($next).flip().parent().removeClass('open');
        };
    }

    var card = new Card($('#cards'), false);
});
