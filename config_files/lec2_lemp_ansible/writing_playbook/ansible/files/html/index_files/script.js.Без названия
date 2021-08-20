(function() {
    var pastCallback = typeof window.onRoistatAllModulesLoaded === "function" ? window.onRoistatAllModulesLoaded : null;
    window.onRoistatAllModulesLoaded = function () {
        if (pastCallback !== null) {
            pastCallback();
        }
        var interval = setInterval(function () {
            var amoLiveChat = document.getElementById('amo-livechat');
            if (amoLiveChat) {
                var roistatFieldId = document.querySelector('.js-amo-roistat-field-id-container').text;
                var clearedRoistatFieldId = roistatFieldId.replace(/\D+/g, '');
                amo_social_button.setMeta({
                    lead: {
                        custom_fields: [
                            {
                                id: clearedRoistatFieldId,
                                values: [{value: window.roistat.visit}]
                            }
                        ]
                    }
                });
                clearInterval(interval);
            }
        }, 1000);
    };
})();