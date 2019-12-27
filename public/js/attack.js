var combat = { "attacker": null, "target": null };

function canAttack(combat) {
    console.log("Attaque " + combat["target"] + " avec " + combat["attacker"]);
    if(combat["attacker"] !== null && combat["target"] !== null) {
        attack(combat);
    }
}

function opponentAttack() {
    console.log("L'IA va attaquer");
    $opponentBoat = $('.can-attack');
    $youBoat = $('.alive');

    combat['attacker'] = $opponentBoat.eq(Math.floor(Math.random()*$opponentBoat.length)).data("id");
    combat['target'] = $youBoat.eq(Math.floor(Math.random()*$youBoat.length)).data("id");
    canAttack(combat);
}

function attack(combat) {
    $.ajax({
        url: '/game/'+game+'/attaque/'+combat['target']+'/by/'+combat['attacker'],
        method: "post",
        data: {
            id: game.id,
            attacker: combat['attacker'],
            target: combat['target']
        }
    }).done(function() {
        location.reload();
    })
}