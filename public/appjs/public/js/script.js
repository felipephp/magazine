$(document).ready(function () {
    Script.init();
    Custom.init();
});

Script = {

    fragments: {},
    activities: {},
    main: null,

    init: function ()
    {
        this.main = document.getElementById("main");
    },

    foreach: function (items, callback)
    {
        if (typeof callback != "function") {
            console.error("Script.each needs a callback function");
            return;
        }

        var i = 0;
        for(var idx in items)
        {
            if (items.hasOwnProperty(idx))
            {
                var item = items[idx];
                callback(item, idx, i);
            }else{
                console.log("i in else is::", i, "item will not have a callback", idx);
            }

            i = i+1;
        }
    },

    Tabs: {
        items: {},
        main: null,

        setOptions: {
            sameWidthItems: false,
            onClick: false
        },

        callbackStorage: {},

        set: function (id) {

            if (!id) { id = "main-tabs"; }

            this.main = document.getElementById(id);
            this.items = $(this.main).find(" > div");

            return this;
        },

        /**
        * Set the same width without use CSS
        * */
        sameWidthItems: function ()
        {
            this.setOptions.sameWidthItems = true;
            return this;
        },

        onClick: function (callback) {
            this.setOptions.onClick = true;
            this.callbackStorage["onClick"] = callback;
            return this;
        },

        /*
        * Add custom method from any class to read each item when end() is called
        * */
        add: function (name, method) {
            this.setOptions[name] = true;
            Script.Tabs["__"+name] = method;
            return this;
        },

        /*
        * Read each item and apply settings
        * */
        end: function () {
            __this = this;
            $(this.items).each(function (idx, item) {
                Script.foreach(__this.setOptions, function (status, methodName) {

                    //Call method (that declared below) dynamically.
                    if (status) {
                        console.log(methodName);
                        console.log("last", __this[methodName]);
                        window["Script"]["Tabs"]["__"+methodName](item, idx);
                    }

                    //Reset option to FALSE
                    // __this.setOptions[methodName] = false;
                })

            });
        },

        /**
        * This methods below is called dynamically
        **/
        __sameWidthItems: function (item)
        {
            item.style.width = (100 / this.items.length)+"%";
        },

        __onClick: function (item, position)
        {
            _this = this;
            item.addEventListener('click', function () {
                _this.callbackStorage.onClick(this, position);
            });
        }
    }
};