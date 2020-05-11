var indexBis = 0;


$('#add-image').click(function(){
    // recup le numéro des futurs champs que je vais créer
    const index = $('#ad_images div.form-group').length;

    indexBis += index;

    // recup le prototype (code nécessaire pour écrire une entrée)
    const tmpl = $('#ad_images').data('prototype').replace(/__name__/g, indexBis);

    // injecte le code au sein de la div
    $('#ad_images').append(tmpl);

    // gestion du bouton supprimer
    handleDeleteButtons();
});

function handleDeleteButtons(){
    $('button[data-action="delete"]').click(function(){
        const target = this.dataset.target;
        $(target).remove();
    });
}
handleDeleteButtons();