<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Inserting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Serif&display=swap" rel="stylesheet">

    <style>
        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1020;
            background-color: white;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);

        }

        #preview-overlay span {
            white-space: pre-wrap;
            word-break: break-word;
        }
    </style>
</head>

<body>

    <h1>Welcome to the Birthday Greeting</h1>

    <div class="container">
        <div class="row col-12">
            <div class="col-6">
                <div id="content-container">
                    <!-- First Content Block -->
                    <div class="content-block mb-4" data-id="0">
                        <div class="mb-3">
                            <label class="form-label">Type</label>
                            <select name="new_type_0" class="form-select new_type">
                                <option value="" selected>Select Type</option>
                                <option value="image">Image</option>
                                <option value="text">Text</option>
                            </select>
                        </div>

                        <!-- Image inputs -->
                        <div class="mb-3 image-upload-section d-none">
                            <label class="form-label">Image Upload</label>
                            <input type="file" class="form-control image_upload" accept="image/*">
                        </div>
                        <div class="mb-3 image-upload-section d-none">
                            <label class="form-label">Image Width (px)</label>
                            <input type="number" class="form-control image-width" value="200">
                        </div>
                        <div class="mb-3 image-upload-section d-none">
                            <label class="form-label">Image Height (px)</label>
                            <input type="number" class="form-control image-height" value="200">
                        </div>

                        <!-- Text inputs -->
                        <div class="mb-3 text-enter-section d-none">
                            <label class="form-label">Text Enter</label>
                            <input type="text" class="form-control text_enter" placeholder="Enter your text here">
                        </div>
                        <div class="mb-3 text-enter-section d-none">
                            <label class="form-label">Font Family</label>
                            <select class="form-select font-text">
                                <option value="arial">Arial</option>
                                <option value="times-new-roman">Times New Roman</option>
                                <option value="verdana">Verdana</option>
                                <option value="tahoma">Tahoma</option>
                                <option value="georgia">Georgia</option>
                                <option value="courier-new">Courier New</option>
                                <option value="impact">Impact</option>
                                <option value="comic-sans-ms">Comic Sans MS</option>
                                <option value="lucida-console">Lucida Console</option>
                                <option value="trebuchet-ms">Trebuchet MS</option>
                                <option value="palatino">Palatino</option>
                                <option value="garamond">Garamond</option>
                                <option value="bookman">Bookman</option>
                                <option value="candara">Candara</option>
                                <option value="calibri">Calibri</option>
                                <option value="cambria">Cambria</option>
                                <option value="century-gothic">Century Gothic</option>
                                <option value="franklin-gothic">Franklin Gothic</option>
                                <option value="corbel">Corbel</option>
                                <option value="segoe-ui">Segoe UI</option>
                                <option value="optima">Optima</option>
                                <option value="monaco">Monaco</option>
                                <option value="avenir">Avenir</option>
                                <option value="futura">Futura</option>
                                <option value="gill-sans">Gill Sans</option>
                                <option value="helvetica">Helvetica</option>
                                <option value="lucida-sans">Lucida Sans</option>
                                <option value="rockwell">Rockwell</option>
                                <option value="baskerville">Baskerville</option>
                                <option value="copperplate">Copperplate</option>
                                <option value="brush-script-mt">Brush Script MT</option>
                                <option value="perpetua">Perpetua</option>
                                <option value="didot">Didot</option>
                                <option value="raleway">Raleway</option>
                                <option value="roboto">Roboto</option>
                                <option value="open-sans">Open Sans</option>
                                <option value="lato">Lato</option>
                                <option value="montserrat">Montserrat</option>
                                <option value="merriweather">Merriweather</option>
                                <option value="playfair-display">Playfair Display</option>
                                <option value="pt-sans">PT Sans</option>
                                <option value="pt-serif">PT Serif</option>
                                <option value="source-sans-pro">Source Sans Pro</option>
                                <option value="oswald">Oswald</option>
                                <option value="noto-sans">Noto Sans</option>
                                <option value="ubuntu">Ubuntu</option>
                                <option value="quicksand">Quicksand</option>
                                <option value="poppins">Poppins</option>
                                <option value="rubik">Rubik</option>
                                <option value="oxygen">Oxygen</option>
                                <option value="exo">Exo</option>
                                <option value="kanit">Kanit</option>
                                <option value="cabin">Cabin</option>
                                <option value="asap">Asap</option>
                                <option value="hind">Hind</option>
                                <option value="arvo">Arvo</option>
                                <option value="droid-sans">Droid Sans</option>
                                <option value="droid-serif">Droid Serif</option>
                                <option value="josefin-sans">Josefin Sans</option>
                                <option value="muli">Muli</option>
                                <option value="titillium-web">Titillium Web</option>
                                <option value="archivo">Archivo</option>
                                <option value="nunito">Nunito</option>
                                <option value="manrope">Manrope</option>
                                <option value="mulish">Mulish</option>
                                <option value="work-sans">Work Sans</option>
                                <option value="inter">Inter</option>
                                <option value="barlow">Barlow</option>
                                <option value="martel">Martel</option>
                                <option value="chivo">Chivo</option>
                                <option value="fira-sans">Fira Sans</option>
                                <option value="heebo">Heebo</option>
                                <option value="overpass">Overpass</option>
                                <option value="signika">Signika</option>
                                <option value="spectral">Spectral</option>
                                <option value="cairo">Cairo</option>
                                <option value="exo-2">Exo 2</option>
                                <option value="epilogue">Epilogue</option>
                                <option value="karla">Karla</option>
                                <option value="lexend">Lexend</option>
                                <option value="fredoka">Fredoka</option>
                                <option value="varela-round">Varela Round</option>
                                <option value="baloo">Baloo</option>
                                <option value="alef">Alef</option>
                                <option value="quattrocento-sans">Quattrocento Sans</option>
                                <option value="passion-one">Passion One</option>
                                <option value="acme">Acme</option>
                                <option value="bitter">Bitter</option>
                                <option value="domine">Domine</option>
                                <option value="abril-fatface">Abril Fatface</option>
                                <option value="cormorant">Cormorant</option>
                                <option value="dosis">Dosis</option>
                                <option value="varela">Varela</option>
                                <option value="francois-one">Francois One</option>
                                <option value="anton">Anton</option>
                                <option value="bangers">Bangers</option>
                                <option value="black-han-sans">Black Han Sans</option>
                            </select>
                        </div>
                        <div class="mb-3 text-enter-section d-none">
                            <label class="form-label">Language</label>
                            <select class="form-select language">
                                <option value="english">English</option>
                                <option value="hindi">Hindi</option>
                                <option value="spanish">Spanish</option>
                                <option value="french">French</option>
                                <option value="german">German</option>
                                <option value="chinese">Chinese (Mandarin)</option>
                                <option value="japanese">Japanese</option>
                                <option value="korean">Korean</option>
                                <option value="russian">Russian</option>
                                <option value="portuguese">Portuguese</option>
                                <option value="arabic">Arabic</option>
                                <option value="bengali">Bengali</option>
                                <option value="italian">Italian</option>
                                <option value="urdu">Urdu</option>
                                <option value="turkish">Turkish</option>
                                <option value="vietnamese">Vietnamese</option>
                                <option value="thai">Thai</option>
                                <option value="polish">Polish</option>
                                <option value="dutch">Dutch</option>
                                <option value="indonesian">Indonesian</option>
                                <option value="swedish">Swedish</option>
                                <option value="greek">Greek</option>
                                <option value="czech">Czech</option>
                                <option value="romanian">Romanian</option>
                                <option value="hungarian">Hungarian</option>
                                <option value="finnish">Finnish</option>
                                <option value="danish">Danish</option>
                                <option value="norwegian">Norwegian</option>
                                <option value="hebrew">Hebrew</option>
                                <option value="malay">Malay</option>
                                <option value="filipino">Filipino</option>
                                <option value="slovak">Slovak</option>
                                <option value="bulgarian">Bulgarian</option>
                                <option value="croatian">Croatian</option>
                                <option value="serbian">Serbian</option>
                                <option value="ukrainian">Ukrainian</option>
                                <option value="persian">Persian</option>
                                <option value="swahili">Swahili</option>
                                <option value="estonian">Estonian</option>
                                <option value="latvian">Latvian</option>
                                <option value="lithuanian">Lithuanian</option>
                                <option value="slovenian">Slovenian</option>
                                <option value="albanian">Albanian</option>
                                <option value="macedonian">Macedonian</option>
                                <option value="georgian">Georgian</option>
                                <option value="armenian">Armenian</option>
                                <option value="kazakh">Kazakh</option>
                                <option value="azerbaijani">Azerbaijani</option>
                                <option value="tamil">Tamil</option>
                                <option value="telugu">Telugu</option>
                                <option value="marathi">Marathi</option>
                                <option value="gujarati">Gujarati</option>
                                <option value="punjabi">Punjabi</option>
                                <option value="malayalam">Malayalam</option>
                                <option value="kannada">Kannada</option>
                                <option value="sinhala">Sinhala</option>
                                <option value="nepali">Nepali</option>
                                <option value="burmese">Burmese</option>
                                <option value="lao">Lao</option>
                                <option value="khmer">Khmer</option>
                                <option value="mongolian">Mongolian</option>
                                <option value="pashto">Pashto</option>
                                <option value="somali">Somali</option>
                                <option value="zulu">Zulu</option>
                                <option value="xhosa">Xhosa</option>
                                <option value="afrikaans">Afrikaans</option>
                                <option value="bosnian">Bosnian</option>
                                <option value="belarusian">Belarusian</option>
                                <option value="basque">Basque</option>
                                <option value="catalan">Catalan</option>
                                <option value="galician">Galician</option>
                                <option value="welsh">Welsh</option>
                                <option value="irish">Irish</option>
                                <option value="scottish-gaelic">Scottish Gaelic</option>
                                <option value="icelandic">Icelandic</option>
                                <option value="luxembourgish">Luxembourgish</option>
                                <option value="maltese">Maltese</option>
                                <option value="tajik">Tajik</option>
                                <option value="uzbek">Uzbek</option>
                                <option value="kyrgyz">Kyrgyz</option>
                                <option value="turkmen">Turkmen</option>
                                <option value="yiddish">Yiddish</option>
                                <option value="haitian-creole">Haitian Creole</option>
                                <option value="maori">Maori</option>
                                <option value="samoan">Samoan</option>
                                <option value="tongan">Tongan</option>
                                <option value="fijian">Fijian</option>
                                <option value="papuan">Papuan</option>
                                <option value="amharic">Amharic</option>
                                <option value="tigrinya">Tigrinya</option>
                                <option value="quechua">Quechua</option>
                                <option value="aymara">Aymara</option>
                                <option value="guarani">Guarani</option>
                                <option value="nahuatl">Nahuatl</option>
                                <option value="mapudungun">Mapudungun</option>
                                <option value="cherokee">Cherokee</option>
                                <option value="inuktitut">Inuktitut</option>
                            </select>
                        </div>
                        <div class="mb-3 text-enter-section d-none">
                            <label class="form-label">Font Size (px)</label>
                            <select class="form-select font-size">
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="18">18</option>
                                <option value="20">20</option>
                                <option value="22">22</option>
                                <option value="24">24</option>
                                <option value="26">26</option>
                                <option value="28">28</option>
                                <option value="32">32</option>
                                <option value="36">36</option>
                                <option value="48">48</option>
                                <option value="60">60</option>
                                <option value="72">72</option>
                            </select>

                        </div>
                        <div class="mb-3 text-enter-section d-none">
                            <label class="form-label">Font Color</label>
                            <input type="color" class="form-control font-color" value="#000000">
                        </div>

                        <!-- Position -->
                        <div class="mb-3">
                            <label class="form-label">Content X Position (px)</label>
                            <input type="number" class="form-control content-x-pos" value="0">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content Y Position (px)</label>
                            <input type="number" class="form-control content-y-pos" value="0">
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <div class="mb-2">
                        <button class="btn btn-secondary" id="back">Back</button>
                        <button class="btn btn-secondary" id="next">Next</button>
                    </div>
                    <div class="mb-2">
                        <button class="btn btn-success" id="add_more">Add More Content</button>
                        <button class="btn btn-danger" id="reset">Reset</button>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <h3>Preview Live</h3>
                <div class="text-center sticky-top">
                    <div class="card">
                        <div class="card-body position-relative">
                            <h5 class="card-title">Image Preview</h5>
                            <div style="position: relative; display: inline-block;">
                                <img id="image-preview" src="{{ asset('images/' . $image) }}" alt="Image Preview" class="img-fluid">
                                <div id="preview-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary mt-3" id="save_changes">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script>
        document.getElementById("save_changes").addEventListener("click", function() {
            html2canvas(document.querySelector("#preview-overlay").parentElement).then(canvas => {
                const imageData = canvas.toDataURL("image/png");

                $.post("{{ route('save.composite.image') }}", {
                    _token: '{{ csrf_token() }}',
                    image: imageData,
                    filename: '{{ $image }}' // send current image filename
                }, function(response) {
                    // Optional: show alert
                    alert("Image saved: " + response.path);

                    // Redirect to home route
                    window.location.href = "{{ route('home') }}";
                });

            });
        });
    </script>

    <script>
        google.load("elements", "1", {
            packages: "transliteration"
        });

        let transliterationControl;

        google.setOnLoadCallback(function() {
            const options = {
                sourceLanguage: google.elements.transliteration.LanguageCode.ENGLISH,
                destinationLanguage: ['hi'], // default to Hindi
                transliterationEnabled: true
            };

            transliterationControl = new google.elements.transliteration.TransliterationControl(options);
        });

        window.transliterate = function(text, langCode) {
            return new Promise((resolve, reject) => {
                if (!transliterationControl) {
                    reject("Transliteration control not ready");
                    return;
                }

                transliterationControl.setLanguagePair(google.elements.transliteration.LanguageCode.ENGLISH, langCode);
                transliterationControl.transliterate([text], (result) => {
                    resolve(result[0]);
                });
            });
        };

        let contentCount = 0;
        let currentBlockIndex = 0;

        // Initial setup
        bindEventsForBlock(document.querySelector(".content-block"));
        showBlockByIndex(currentBlockIndex);

        // Add More Content
        document.getElementById("add_more").addEventListener("click", () => {
            contentCount++;
            const blockHTML = createContentBlock(contentCount);
            const tempDiv = document.createElement("div");
            tempDiv.innerHTML = blockHTML;
            const block = tempDiv.firstElementChild;
            document.getElementById("content-container").appendChild(block);
            bindEventsForBlock(block);
            currentBlockIndex = getBlocks().length - 1;
            showBlockByIndex(currentBlockIndex);
        });

        // Back
        document.getElementById("back").addEventListener("click", () => {
            if (currentBlockIndex > 0) {
                currentBlockIndex--;
                showBlockByIndex(currentBlockIndex);
            }
        });

        // Next
        document.getElementById("next").addEventListener("click", () => {
            const blocks = getBlocks();
            if (currentBlockIndex < blocks.length - 1) {
                currentBlockIndex++;
                showBlockByIndex(currentBlockIndex);
            }
        });

        // Reset
        document.getElementById("reset").addEventListener("click", () => {
            const blocks = getBlocks();
            if (blocks.length > 1) {
                blocks[blocks.length - 1].remove();
                currentBlockIndex = Math.max(0, blocks.length - 2);
                showBlockByIndex(currentBlockIndex);
            } else {
                document.getElementById("preview-overlay").innerHTML = "";
            }
        });

        // Helpers
        function createContentBlock(id) {
            return document.querySelector(".content-block").outerHTML
                .replace(/data-id="0"/g, `data-id="${id}"`)
                .replace(/name="new_type_0"/g, `name="new_type_${id}"`);
        }

        function bindEventsForBlock(block) {
            const typeSelect = block.querySelector(".new_type");
            const imageUpload = block.querySelector(".image_upload");
            const imageWidth = block.querySelector(".image-width");
            const imageHeight = block.querySelector(".image-height");
            const textEnter = block.querySelector(".text_enter");
            const fontText = block.querySelector(".font-text");
            const fontSize = block.querySelector(".font-size");
            const fontColor = block.querySelector(".font-color");
            const language = block.querySelector(".language");
            const xPos = block.querySelector(".content-x-pos");
            const yPos = block.querySelector(".content-y-pos");

            typeSelect.addEventListener("change", () => {
                const type = typeSelect.value;
                const imgSections = block.querySelectorAll(".image-upload-section");
                const textSections = block.querySelectorAll(".text-enter-section");
                if (type === "image") {
                    imgSections.forEach(el => el.classList.remove("d-none"));
                    textSections.forEach(el => el.classList.add("d-none"));
                    addOrUpdateOverlay(block.dataset.id, 'image');
                } else if (type === "text") {
                    imgSections.forEach(el => el.classList.add("d-none"));
                    textSections.forEach(el => el.classList.remove("d-none"));
                    addOrUpdateOverlay(block.dataset.id, 'text');
                } else {
                    imgSections.forEach(el => el.classList.add("d-none"));
                    textSections.forEach(el => el.classList.add("d-none"));
                    removeOverlay(block.dataset.id);
                }
            });

            imageUpload.addEventListener("change", () => updateImageOverlay(block));
            imageWidth.addEventListener("input", () => updateImageOverlay(block));
            imageHeight.addEventListener("input", () => updateImageOverlay(block));
            xPos.addEventListener("input", () => updateOverlayPosition(block));
            yPos.addEventListener("input", () => updateOverlayPosition(block));

            textEnter.addEventListener("input", () => updateTextOverlay(block));
            fontText.addEventListener("input", () => updateTextOverlay(block));
            fontSize.addEventListener("input", () => updateTextOverlay(block));
            fontColor.addEventListener("input", () => updateTextOverlay(block));
            language.addEventListener("input", () => updateTextOverlay(block));
        }

        function addOrUpdateOverlay(id, type) {
            let overlay = document.getElementById(`overlay-${id}`);

            // If overlay exists but is the wrong type, remove it
            if (overlay) {
                const isImageOverlay = overlay.tagName.toLowerCase() === 'img';
                if ((type === 'image' && !isImageOverlay) || (type === 'text' && isImageOverlay)) {
                    overlay.remove();
                    overlay = null; // force create new one
                }
            }

            // Create overlay if needed
            if (!overlay) {
                overlay = type === 'image' ? document.createElement('img') : document.createElement('span');
                overlay.id = `overlay-${id}`;
                overlay.style.position = 'absolute';
                overlay.style.display = 'block';
                document.getElementById("preview-overlay").appendChild(overlay);
            }

            overlay.style.display = 'block';
        }


        function removeOverlay(id) {
            const el = document.getElementById(`overlay-${id}`);
            if (el) el.remove();
        }

        function updateImageOverlay(block) {
            const id = block.dataset.id;
            const overlay = document.getElementById(`overlay-${id}`);
            if (!overlay) return;

            const fileInput = block.querySelector(".image_upload");
            const width = block.querySelector(".image-width").value;
            const height = block.querySelector(".image-height").value;
            const x = block.querySelector(".content-x-pos").value + "px";
            const y = block.querySelector(".content-y-pos").value + "px";

            if (fileInput.files[0]) {
                const url = URL.createObjectURL(fileInput.files[0]);
                overlay.src = url;
            }
            overlay.style.width = width + "px";
            overlay.style.height = height + "px";
            overlay.style.left = x;
            overlay.style.top = y;
        }
        const languageCodeMap = {
            afrikaans: "af",
            albanian: "sq",
            amharic: "am",
            arabic: "ar",
            armenian: "hy",
            azerbaijani: "az",
            basque: "eu",
            belarusian: "be",
            bengali: "bn",
            bosnian: "bs",
            bulgarian: "bg",
            burmese: "my",
            catalan: "ca",
            cebuano: "ceb",
            chinese: "zh",
            corsican: "co",
            croatian: "hr",
            czech: "cs",
            danish: "da",
            dutch: "nl",
            english: "en",
            esperanto: "eo",
            estonian: "et",
            filipino: "tl",
            finnish: "fi",
            french: "fr",
            frisian: "fy",
            galician: "gl",
            georgian: "ka",
            german: "de",
            greek: "el",
            gujarati: "gu",
            haitian_creole: "ht",
            hausa: "ha",
            hawaiian: "haw",
            hebrew: "he",
            hindi: "hi",
            hmong: "hmn",
            hungarian: "hu",
            icelandic: "is",
            igbo: "ig",
            indonesian: "id",
            irish: "ga",
            italian: "it",
            japanese: "ja",
            javanese: "jw",
            kannada: "kn",
            kazakh: "kk",
            khmer: "km",
            korean: "ko",
            kurdish: "ku",
            kyrgyz: "ky",
            lao: "lo",
            latin: "la",
            latvian: "lv",
            lithuanian: "lt",
            luxembourgish: "lb",
            macedonian: "mk",
            malagasy: "mg",
            malay: "ms",
            malayalam: "ml",
            maltese: "mt",
            maori: "mi",
            marathi: "mr",
            mongolian: "mn",
            myanmar: "my",
            nepali: "ne",
            norwegian: "no",
            nyanja: "ny",
            pashto: "ps",
            persian: "fa",
            polish: "pl",
            portuguese: "pt",
            punjabi: "pa",
            romanian: "ro",
            russian: "ru",
            samoan: "sm",
            scots_gaelic: "gd",
            serbian: "sr",
            sesotho: "st",
            shona: "sn",
            sindhi: "sd",
            sinhala: "si",
            slovak: "sk",
            slovenian: "sl",
            somali: "so",
            spanish: "es",
            sundanese: "su",
            swahili: "sw",
            swedish: "sv",
            tajik: "tg",
            tamil: "ta",
            telugu: "te",
            thai: "th",
            turkish: "tr",
            ukrainian: "uk",
            urdu: "ur",
            uzbek: "uz",
            vietnamese: "vi",
            welsh: "cy",
            xhosa: "xh",
            yiddish: "yi",
            yoruba: "yo",
            zulu: "zu"
        };
        function updateTextOverlay(block) {
            const id = block.dataset.id;
            const overlay = document.getElementById(`overlay-${id}`);
            if (!overlay) return;

            let text = block.querySelector(".text_enter").value || "Your text here";
            const font = block.querySelector(".font-text").value;
            const size = block.querySelector(".font-size").value;
            const color = block.querySelector(".font-color").value;
            const lang = block.querySelector(".language").value;
            const x = block.querySelector(".content-x-pos").value + "px";
            const y = block.querySelector(".content-y-pos").value + "px";

            const translitCode = languageCodeMap[lang];
            if (translitCode) {
                window.transliterate(text, translitCode).then(transliterated => {
                    overlay.innerText = transliterated;
                }).catch(() => {
                    overlay.innerText = text;
                });
            } else {
                overlay.innerText = text;
            }
            overlay.innerText = text;
            overlay.style.fontFamily = `"${font}", 'Noto Sans', 'Noto Serif', sans-serif`;
            overlay.style.fontSize = size + "px";
            overlay.style.color = color;
            overlay.style.left = x;
            overlay.style.top = y;
            overlay.setAttribute("lang", lang);
        }
        function updateOverlayPosition(block) {
            const id = block.dataset.id;
            const overlay = document.getElementById(`overlay-${id}`);
            if (!overlay) return;
            overlay.style.left = block.querySelector(".content-x-pos").value + "px";
            overlay.style.top = block.querySelector(".content-y-pos").value + "px";
        }

        function showBlockByIndex(index) {
            const blocks = getBlocks();
            blocks.forEach((block, i) => {
                block.classList.toggle("d-none", i !== index);
            });
        }
        function getBlocks() {
            return Array.from(document.querySelectorAll(".content-block"));
        }
    </script>

</body>

</html>