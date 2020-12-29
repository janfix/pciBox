/*
Build by Wiquid's PCI Generator for TAO platform Free to use 
 */

define(['IMSGlobal/jquery_2_1_1', 'OAT/util/html'], function($, html){
    'use strict';

 function renderChoices(id, Scontainer, config){

            console.log('OK renderchoices fonctionnel');
          

    }

    function renderLabels(id, Scontainer, config, assetManager){

            console.log('OK renderlabels fonctionnel');   
    }


    return {
        render : function(id, container, config, assetManager){

            var Scontainer = $(container);

            renderChoices(id, Scontainer, config);
            renderLabels(id, Scontainer, config, assetManager);
            
            //render rich text content in prompt
            html.render(Scontainer.find('.prompt'));
        },
        renderChoices : function(id, container, config){
            renderChoices(id, $(container), config);
        }
    };
});
 