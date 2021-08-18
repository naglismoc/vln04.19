id = "ctl00$FullRegion$MainRegion$ContentRegion$ContentFullRegion$ContentLeftRegion$CEPGroup1$CEPActive$cepNDPRevBookingArea$Searchbtn$ButtonLink&quot";


WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(id,"", false, "", "", false, true))

// ctl00_FullRegion_MainRegion_ContentRegion_ContentFullRegion_ContentLeftRegion_CEPGroup1_CEPActive_cepNDPRevBookingArea_Searchbtn_ButtonLink
// yra id hrefo

function keypress(e, clientId) {
     if ({ 13: 1 }[e.which || e.keyCode]) {
          WebForm_DoPostBackWithOptions(
                new WebForm_PostBackOptions(
                    clientId, '', true, '', 'https://classic.flysas.com/en/de/', false, true
                )
            );
         } 
        }

        function WebForm_PostBackOptions(eventTarget, eventArgument, validation, validationGroup, actionUrl, trackFocus, clientSubmit) {
            this.eventTarget = "ctl00$FullRegion$MainRegion$ContentRegion$ContentFullRegion$ContentLeftRegion$CEPGroup1$CEPActive$cepNDPRevBookingArea$Searchbtn$ButtonLink";
            this.eventArgument = "";
            this.validation = true;
            this.validationGroup = "";
            this.actionUrl = "";
            this.trackFocus = false;
            this.clientSubmit = true;
        }
        function WebForm_DoPostBackWithOptions(options) {
            var validationResult = true;
            if (options.validation) {
                if (typeof(Page_ClientValidate) == 'function') {
                    validationResult = Page_ClientValidate(options.validationGroup);
                }
            }
            if (validationResult) {
                if ((typeof(options.actionUrl) != "undefined") && (options.actionUrl != null) && (options.actionUrl.length > 0)) {
                    theForm.action = options.actionUrl;
                }
                if (options.trackFocus) {
                    var lastFocus = theForm.elements["__LASTFOCUS"];
                    if ((typeof(lastFocus) != "undefined") && (lastFocus != null)) {
                        if (typeof(document.activeElement) == "undefined") {
                            lastFocus.value = options.eventTarget;
                        }
                        else {
                            var active = document.activeElement;
                            if ((typeof(active) != "undefined") && (active != null)) {
                                if ((typeof(active.id) != "undefined") && (active.id != null) && (active.id.length > 0)) {
                                    lastFocus.value = active.id;
                                }
                                else if (typeof(active.name) != "undefined") {
                                    lastFocus.value = active.name;
                                }
                            }
                        }
                    }
                }
            }
            if (options.clientSubmit) {
                __doPostBack(options.eventTarget, options.eventArgument);
            }
        }


    
