Custom = {
    init: function () {

        Script.Tabs.set().sameWidthItems().onClick(this.onTabClick).end();

        /**
         * Example adding custom event
         * */
        // Script.Tabs.set().sameWidthItems().add("dynTeste", this.dynTeste).onClick(this.onTabClick).end();
    },

    dynTeste: function (item, idx) {
        console.log("dynTeste", item, idx);
        if (idx == 2) {
            item.addEventListener('click', function () {
                alert("other click on last tab");
            })
        }
    },

    onTabClick: function (item, position) {
        alert("Tab "+position+" clicked!");
    }
};