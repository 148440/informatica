
var fixtureString = "<div id=fix>";
fixtureString += '';
fixtureString += "</div> ";

describe('test ', function () {

    beforeEach(function () { // before each test
        $(fixtureString).appendTo('body')
    })
    afterEach(function () {
        $('#fix').remove();
    })
    it('must do ... ???', function () {
        console.log($('#fix').html());

        functionX("abc", true);
        expect($('[title="abc"]').attr('class')).toBe('active');

    });

});
