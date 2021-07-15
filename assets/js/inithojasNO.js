$(document).ready(function() {
    var tree = new ClassyLeaves({
        leaves: 30,
        maxY: -10,
        multiplyOnClick: true,
        multiply: 2,
        infinite: true,
        speed: 2000
    });
    $('body').on('click', '.addLeaf', function() {
        console.log('8');
        tree.add(8);
        return false;
    });
});