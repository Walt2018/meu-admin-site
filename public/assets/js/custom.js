function tinymce_init_callback(editor) {
    editor.remove();
    editor = null;

    tinymce.init({
        menubar: true,
        selector: 'textarea.richTextBox',
        skin_url: $('meta[name="assets-path"]').attr('content') + '?path=js/skins/voyager',
        min_height: 600,
        resize: 'vertical',
        plugins: 'link, image, code, table, textcolor, lists',
        extended_valid_elements: 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
        content_css: 'https://scalavel.com/assets/vendor/bootstrap/css/bootstrap.min.css,https://scalavel.com/assets/css/skins/skin-digital-agency-2.css,https://scalavel.com/assets/css/demos/demo-digital-agency-2-dark.css',
        toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table | code | customInsertButton | novaLinhaMenu | limparMenu | paragrafoMenu',
        // formats: {
        //     // Changes the alignment buttons to add a class to each of the matching selector elements
        //     alignleft: { selector: 'div', classes: 'col' },
        //   },

        setup: function (editor) {

            var node = '';
            var seletorDiv = '';

            editor.on('click', function (e) {
                //console.log('Node changed'+ e);
                // editor.selection.setContent('<strong>Some contents</strong>');
                if (node != '') {
                    node.style.border = "none";
                }
                //console.log( editor.selection.select(node) );

                //pega o document do tiny
                let ifrme = document.querySelectorAll("#richtextbody_ifr");

                // console.log( ifrme,"Children: > ",ifrme[0].contentDocument.body,ifrme[0].contentDocument.body.querySelector("#containerbox") );

                //    const toSpan = document.createElement("span");
                //    //adicionando classe ao botao fechar
                //    toSpan.classList.add("btn-close");
                //    const toSpanText = document.createTextNode("");
                //    toSpan.appendChild(toSpanText);

                let seletorDivCurr = "#" + e.target.id;
                //    if(seletorDiv!=seletorDivCurr){
                //        ifrme[0].contentDocument.querySelector(seletorDivCurr).appendChild(toSpan);
                //    }

                seletorDiv = seletorDivCurr;

                // e.target.style.border = "3pt solid #97f582";
                // node = editor.selection.getNode();
                node = e.target;
                //pega o id do el
                console.log(e, e.target.id);

            });

            editor.addButton('customInsertButton', {
                type: 'menubutton',
                text: 'Colunas',
                icon: false,
                menu: [{
                    text: 'Linha',
                    onclick: function () {

                        let d = new Date();
                        let idatec = d.getMonth() + d.getDate() + d.getMilliseconds();
                        let idater = d.getMonth() + d.getDate() + d.getMilliseconds();
                        editor.insertContent("<div id='container" + idatec + "' class='container'> <div id='rowline" + idater + "' class='row p-md-5 p-xs-0'> Linha </div>  </div>");
                    }
                }, {
                    text: '1 Coluna',
                    onclick: function () {
                        let d = new Date();
                        let idatec1 = d.getMonth() + "-" + d.getDate() + "-" + d.getMilliseconds();
                        editor.insertContent("<div id='c11" + idatec1 + "' class='col-md-12 p-md-5'> Coluna  </div>");
                    }
                }, {
                    text: '2 Colunas',
                    onclick: function () {

                        let d = new Date();
                        let idatec1 = d.getMonth() + "-" + d.getDate() + "-" + d.getMilliseconds();
                        let idatec2 = d.getMonth() + "-" + d.getDate() + "-" + d.getMilliseconds();
                        editor.insertContent("<div id='c12" + idatec1 + "' class='col-md-6 col-xs-12 py-5'> Coluna1  </div> <div id='c22" + idatec2 + "' class='col-md-6 col-xs-12 p-md-5 py-5'> Coluna2  </div>");
                    }
                }, {
                    text: '3 Colunas',
                    onclick: function () {
                        let d = new Date();
                        let idatec1 = d.getMonth() + "-" + d.getDate() + "-" + d.getMilliseconds();
                        let idatec2 = d.getMonth() + "-" + d.getDate() + "-" + d.getMilliseconds();
                        let idatec3 = d.getMonth() + "-" + d.getDate() + "-" + d.getMilliseconds();
                        editor.insertContent("<div id='c13" + idatec1 + "'  class='col-md-4 col-xs-12 py-5'> Coluna1  </div> <div id='c23" + idatec2 + "' class='col-md-4 col-xs-12 py-5'> Coluna2  </div> <div id='c33" + idatec3 + "' class='col-md-4 col-xs-12 py-5'> Coluna3  </div>");
                    }
                }, {
                    text: '4 Colunas',
                    onclick: function () {
                        let d = new Date();
                        let idatec1 = d.getMonth() + "-" + d.getDate() + "-" + d.getMilliseconds();
                        let idatec2 = d.getMonth() + "-" + d.getDate() + "-" + d.getMilliseconds();
                        let idatec3 = d.getMonth() + "-" + d.getDate() + "-" + d.getMilliseconds();
                        let idatec4 = d.getMonth() + "-" + d.getDate() + "-" + d.getMilliseconds();
                        editor.insertContent("<div id='" + idatec1 + "' class='col-md-3 col-xs-12 py-5'> Coluna1  </div> <div id='" + idatec2 + "' class='col-md-3 col-xs-12 py-5'> Coluna2  </div> <div id='" + idatec3 + "' class='col-md-3 col-xs-12 py-5'> Coluna3  </div> <div id='" + idatec4 + "' class='col-md-3 col-xs-12 py-5'> Coluna4  </div>");
                    }
                },
                {
                    text: 'Limpar',
                    onclick: function () {
                        let ifrme = document.querySelectorAll("#richtextbody_ifr");
                        //limpa o editor
                        ifrme[0].contentDocument.querySelector("#tinymce").innerHTML = "";
                        //editor.insertContent("&ensp;");
                    }
                }]
            });

            editor.addButton('novaLinhaMenu', {
                text: 'Nova linha',
                icon: false,
                onclick: function () {
                    let ifrme = document.querySelectorAll("#richtextbody_ifr");

                    let d = new Date();
                    let idatec = d.getMonth() + d.getDate() + d.getMilliseconds();
                    let idater = d.getMonth() + d.getDate() + d.getMilliseconds();

                    let currHtml = ifrme[0].contentDocument.querySelector("#tinymce").innerHTML;
                    //adiciona nova lina ao editor
                    ifrme[0].contentDocument.querySelector("#tinymce").innerHTML = currHtml + "<div id='container" + idatec + "' class='container'> <div id='rowline" + idater + "' class='row p-md-5 p-xs-0'> Linha </div>  </div>";
                }
            });

            editor.addButton('limparMenu', {
                text: 'Limpar',
                icon: false,
                onclick: function () {
                    let ifrme = document.querySelectorAll("#richtextbody_ifr");
                    //limpa o editor
                    ifrme[0].contentDocument.querySelector("#tinymce").innerHTML = "";
                }
            });

            editor.addButton('paragrafoMenu', {
                text: 'Novo Parágrafo',
                icon: false,
                onclick: function () {
                    editor.insertContent("<p></p>");
                }
            });

            // editor.on('PastePreProcess', function (e) {
            //     e.pasteAsPlainText = true;
            // });

        },
        style_formats: [
            { title: 'Div Row Linha', block: 'div', classes: ['row', 'p-5'], wrapper: true },
            { title: 'Div Row Col 50%', block: 'div', classes: ['col', 'p-5', 'col-md-6'], wrapper: true },
            {
                title: 'Parágrafo', items: [
                    { title: 'H1', block: 'h1' },
                    { title: 'H2', block: 'h2' },
                    { title: 'H3', block: 'h3' },
                    { title: 'H4', block: 'h4' },
                    { title: 'p', block: 'p' }
                ]
            }
        ],
        tyle_formats_merge: true,
        content_style: 'div{background-color: #fff;} .row{background-color: #f3f3f3;}.col{background-color: #d0d0d0;} #tinymce{cursor:pointer} .btn-close{position: absolute;top:5px; left:5px} .container{background-color:#969696} #tinymce div{position:relative} div:hover{border:3pt solid #97f582!important}',
        file_browser_callback: function (field_name, url, type, win) {
            if (type == 'image') {
                $('#upload_file').trigger('click');
            }
        },
        convert_urls: true,
        image_caption: true,
        end_container_on_empty_block: true,
        // paste_as_text: true,
        // paste_text_sticky: true,
        // paste_text_sticky_default: true,
        image_title: true
    });

}


