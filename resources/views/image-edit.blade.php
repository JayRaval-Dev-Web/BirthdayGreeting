<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Inserting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari&family=Noto+Sans+Bengali&display=swap" rel="stylesheet">
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

    <h1 class="text-center">Welcome to the Birthday Greeting <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a> </h1>

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
                                <option value="am">Amharic</option>
                                <option value="ar">Arabic</option>
                                <option value="bn">Bengali</option>
                                <option value="en">English</option>
                                <option value="el">Greek</option>
                                <option value="gu">Gujarati</option>
                                <option value="he">Hebrew</option>
                                <option value="iw">Hebrew</option> <!-- old ISO code for Hebrew -->
                                <option value="hi">Hindi</option>
                                <option value="kn">Kannada</option>
                                <option value="ml">Malayalam</option>
                                <option value="mr">Marathi</option>
                                <option value="ne">Nepali</option>
                                <option value="pa">Punjabi</option>
                                <option value="fa">Persian</option>
                                <option value="ru">Russian</option>
                                <option value="sa">Sanskrit</option>
                                <option value="sr">Serbian</option>
                                <option value="ta">Tamil</option>
                                <option value="te">Telugu</option>
                                <option value="ti">Tigrinya</option>
                                <option value="ur">Urdu</option>
                            </select>


                        </div>
                        <div class="mb-3 text-enter-section d-none">
                            <label class="form-label">Font Size (px)</label>
                            <input type="number" class="form-control font-size" value="24">
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
                <h3 class="text-center">Preview Live</h3>
                <div class="text-center sticky-top">
                    <div class="card">
                        <div class="card-body position-relative">
                            <h5 class="card-title">Image Preview</h5>
                            <div style="position: relative; display: inline-block;">
                                <img id="image-preview" src="{{ asset('images/' . $image) }}" alt="Image Preview" class="img-fluid" style="width: 100%; height: auto;">
                                <div id="preview-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary mt-3" id="save_changes">Save Changes</button>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="card-body" id="content-list">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <!-- Add Aksharamukha Transliteration Library -->
    <script src="https://cdn.jsdelivr.net/npm/aksharamukha-js@1.0.5/dist/aksharamukha.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const img = document.getElementById("image-preview");
            const originalSrc = img.getAttribute("src");
            img.setAttribute("src", originalSrc + "?t=" + new Date().getTime());
        });

        document.getElementById("save_changes").addEventListener("click", function() {
            html2canvas(document.querySelector("#preview-overlay").parentElement).then(canvas => {
                const imageData = canvas.toDataURL("image/png");

                $.post("{{ route('save.composite.image') }}", {
                    _token: '{{ csrf_token() }}',
                    image: imageData,
                    filename: '{{ $image }}'
                }, function(response) {
                    alert("Image saved: " + response.path);
                    window.location.href = "{{ route('home') }}";
                });

            });
        });

        let contentCount = 0;
        let currentBlockIndex = 0;

        bindEventsForBlock(document.querySelector(".content-block"));
        showBlockByIndex(currentBlockIndex);
        updateContentList();

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
            updateContentList();
        });

        document.getElementById("back").addEventListener("click", () => {
            if (currentBlockIndex > 0) {
                currentBlockIndex--;
                showBlockByIndex(currentBlockIndex);
            }
        });

        document.getElementById("next").addEventListener("click", () => {
            if (currentBlockIndex < getBlocks().length - 1) {
                currentBlockIndex++;
                showBlockByIndex(currentBlockIndex);
            }
        });

        document.getElementById("reset").addEventListener("click", () => {
            const blocks = getBlocks();
            if (blocks.length > 1) {
                blocks[blocks.length - 1].remove();
                currentBlockIndex = Math.max(0, blocks.length - 2);
                showBlockByIndex(currentBlockIndex);
            } else {
                document.getElementById("preview-overlay").innerHTML = "";
            }
            updateContentList();
        });

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
            const language = block.querySelector(".language");
            const fontText = block.querySelector(".font-text");
            const fontSize = block.querySelector(".font-size");
            const fontColor = block.querySelector(".font-color");
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
                    updateImageOverlay(block);
                } else if (type === "text") {
                    imgSections.forEach(el => el.classList.add("d-none"));
                    textSections.forEach(el => el.classList.remove("d-none"));
                    addOrUpdateOverlay(block.dataset.id, 'text');
                    updateTextOverlay(block);
                } else {
                    imgSections.forEach(el => el.classList.add("d-none"));
                    textSections.forEach(el => el.classList.add("d-none"));
                    removeOverlay(block.dataset.id);
                }
                updateContentList();
            });

            imageUpload.addEventListener("change", () => {
                updateImageOverlay(block);
                updateContentList();
            });
            imageWidth.addEventListener("input", () => {
                updateImageOverlay(block);
                updateContentList();
            });
            imageHeight.addEventListener("input", () => {
                updateImageOverlay(block);
                updateContentList();
            });
            xPos.addEventListener("input", () => {
                updateOverlayPosition(block);
                updateContentList();
            });
            yPos.addEventListener("input", () => {
                updateOverlayPosition(block);
                updateContentList();
            });

            textEnter.addEventListener("input", async () => {
                await updateTextOverlay(block);
                updateContentList();
            });
            fontText.addEventListener("input", async () => {
                await updateTextOverlay(block);
                updateContentList();
            });
            fontSize.addEventListener("input", async () => {
                await updateTextOverlay(block);
                updateContentList();
            });
            fontColor.addEventListener("input", async () => {
                await updateTextOverlay(block);
                updateContentList();
            });
            language.addEventListener("input", async () => {
                await updateTextOverlay(block);
                updateContentList();
            });
        }

        function addOrUpdateOverlay(id, type) {
            let overlay = document.getElementById(`overlay-${id}`);
            if (overlay) {
                const isImage = overlay.tagName.toLowerCase() === "img";
                if ((type === "image" && !isImage) || (type === "text" && isImage)) {
                    overlay.remove();
                    overlay = null;
                }
            }
            if (!overlay) {
                overlay = type === "image" ? document.createElement("img") : document.createElement("span");
                overlay.id = `overlay-${id}`;
                overlay.style.position = "absolute";
                overlay.style.display = "block";
                document.getElementById("preview-overlay").appendChild(overlay);
            }
            overlay.style.display = "block";
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

        async function translateText(text, targetLang) {
            if (!text.trim()) return "";
            if (targetLang === "en") return text;
            try {
                const response = await fetch("{{ route('translate') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        text,
                        target: targetLang
                    })
                });

                const data = await response.json();

                // Return the actual transliterated text
                return data.transliteratedText || text;

            } catch (e) {
                console.error("Translation error", e);
                return text;
            }
        }

        async function updateTextOverlay(block) {
            const id = block.dataset.id;
            const overlay = document.getElementById(`overlay-${id}`);
            if (!overlay) return;

            let text = block.querySelector(".text_enter").value || "Your text here";
            const font = block.querySelector(".font-text").value;
            const size = block.querySelector(".font-size").value;
            const color = block.querySelector(".font-color").value;
            const x = block.querySelector(".content-x-pos").value + "px";
            const y = block.querySelector(".content-y-pos").value + "px";
            const langValue = block.querySelector(".language").value;

            let translated = await translateText(text, langValue);

            overlay.innerText = translated;
            overlay.style.fontFamily = `"${font}", sans-serif`;
            overlay.style.fontSize = size + "px";
            overlay.style.color = color;
            overlay.style.left = x;
            overlay.style.top = y;
        }

        function updateOverlayPosition(block) {
            const id = block.dataset.id;
            const overlay = document.getElementById(`overlay-${id}`);
            if (!overlay) return;
            overlay.style.left = block.querySelector(".content-x-pos").value + "px";
            overlay.style.top = block.querySelector(".content-y-pos").value + "px";
        }

        function updateContentList() {
            const contentList = document.getElementById("content-list");
            contentList.innerHTML = "";

            getBlocks().forEach(block => {
                const id = block.dataset.id;
                const type = block.querySelector(".new_type").value;
                const div = document.createElement("div");
                div.classList.add("border", "p-1", "mb-1", "bg-light");
                div.dataset.id = id;
                div.style.cursor = "pointer";

                if (type === "text") {
                    const text = block.querySelector(".text_enter").value;
                    div.contentEditable = true;
                    div.innerText = text || `Text #${id}`;
                    div.addEventListener("input", () => {
                        block.querySelector(".text_enter").value = div.innerText;
                        updateTextOverlay(block);
                    });
                } else if (type === "image") {
                    const width = block.querySelector(".image-width").value;
                    const height = block.querySelector(".image-height").value;
                    div.innerText = `Image #${id} (${width}x${height}px)`;
                } else {
                    div.innerText = `Content #${id} (no type)`;
                }

                div.addEventListener("click", () => {
                    currentBlockIndex = getBlocks().findIndex(b => b.dataset.id === id);
                    showBlockByIndex(currentBlockIndex);
                });

                contentList.appendChild(div);
            });
        }

        function showBlockByIndex(index) {
            getBlocks().forEach((block, i) => {
                block.classList.toggle("d-none", i !== index);
            });
        }

        function getBlocks() {
            return Array.from(document.querySelectorAll(".content-block"));
        }
    </script>


</body>

</html>