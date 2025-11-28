new Splide(".splide").mount();
function changeLogoAnimation(type) {
    const logo = document.getElementById("whatsapp-logo");

    // Remover todas las animaciones anteriores
    logo.style.animation = "none";

    // Aplicar la nueva animación después de un breve retraso
    setTimeout(() => {
        switch (type) {
            case "subtle":
                logo.style.animation =
                    "logo-rotate-subtle 5s ease-in-out infinite";
                break;
            case "swing":
                logo.style.animation = "logo-swing 4s ease-in-out infinite";
                break;
            case "none":
                logo.style.animation = "none";
                break;
        }
    }, 10);
}

document.addEventListener("DOMContentLoaded", () => {
    // REFERENCIAS
    const tengoMedidas = document.getElementById("tengoMedidas");
    const noTengoMedidas = document.getElementById("noTengoMedidas");

    const tipoProductoDiv = document.getElementById("tipoProductoDiv");
    const cantidadDiv = document.getElementById("cantidadDiv");
    const contenedorCampos = document.getElementById("contenedorCampos");
    const datosCliente = document.getElementById("datosCliente");
    const btnEnviar = document.getElementById("btnEnviar");

    const tipoProducto = document.getElementById("tipoProducto");
    const cantidad = document.getElementById("cantidad");
    const form = document.querySelector("form");

    // 🔥 --- ESTA ES LA ÚNICA FUNCIÓN QUE MANEJA VALIDACIONES ---
    function actualizarValidaciones() {
        const elementos = document.querySelectorAll("input, select, textarea");

        elementos.forEach((el) => {
            // ❌ IGNORAR EL TOKEN PARA QUE NO LO DESHABILITE
            if (el.name === "_token") return;

            const visible = el.offsetParent !== null;

            if (visible) {
                el.disabled = false;
                if (el.hasAttribute("data-req")) {
                    el.required = true;
                }
            } else {
                el.required = false;
                el.disabled = true;
            }
        });
    }

    function crearSelectCantidad() {
        cantidad.innerHTML = "";
        for (let i = 1; i <= 10; i++) {
            cantidad.innerHTML += `<option value="${i}">${i}</option>`;
        }
        cantidad.value = 1;
    }

    crearSelectCantidad();

    function generarCampos() {
        contenedorCampos.innerHTML = "";

        const tipo = tipoProducto.value;
        const cant = parseInt(cantidad.value);

        if (!tipo || !cant) return;

        for (let i = 1; i <= cant; i++) {
            let bloque = document.createElement("div");
            bloque.classList.add("bloque-cotizacion");

            const titulo = {
                persiana: "Persiana",
                cortina: "Cortina",
                piso: "Piso",
                pasto: "Pasto sintético",
                papel: "Papel tapiz",
            }[tipo];

            bloque.innerHTML = `
                <h3>${titulo} #${i}</h3>
                <div class="row">
                    <div class="col-12 col-sm 12 col-md-6 col-lg-6 mb-3">
                        <label>Ancho (cm)</label>
                        <input type="number" name="${tipo}${i}_ancho" class="form-control" data-req>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <label>Alto (cm)</label>
                        <input type="number" name="${tipo}${i}_alto" class="form-control" data-req>
                    </div>
                </div>
            `;

            if (tipo === "persiana") {
                bloque.innerHTML += `
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <label>Tipo de persiana</label>
                        <select name="${tipo}${i}_tipoPersiana" class="form-select" data-req>
                            <option value="">Selecciona</option>
                            <option value="enrollable">Enrollable</option>
                            <option value="sheer">Sheer</option>
                            <option value="dia-noche">Día y noche</option>
                            <option value="blackout">Blackout</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <label>Nivel de privacidad</label>
                        <select name="${tipo}${i}_privacidad" class="form-select" data-req>
                            <option value="">Selecciona</option>
                            <option value="traslucida">Tráslucida</option>
                            <option value="semitraslucida">Semi tráslucida</option>
                            <option value="blackout">Blackout</option>
                        </select>
                    </div>
                </div>`;
            }

            if (tipo === "cortina") {
                bloque.innerHTML += `
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-3">
                        <label>Tipo de tela</label>
                        <select name="${tipo}${i}_tela" class="form-select" data-req>
                            <option value="">Selecciona</option>
                            <option value="tergal">Tergal</option>
                            <option value="blackout">Blackout</option>
                        </select>
                    </div>
                </div>`;
            }

            contenedorCampos.appendChild(bloque);
        }

        actualizarValidaciones();
    }

    tengoMedidas.addEventListener("change", () => {
        if (tengoMedidas.checked) {
            noTengoMedidas.checked = false;

            tipoProductoDiv.style.display = "block";
            datosCliente.style.display = "block"; // SIEMPRE visible
            btnEnviar.style.display = "block";
        }
        actualizarValidaciones();
    });
    noTengoMedidas.addEventListener("change", () => {
        if (noTengoMedidas.checked) {
            tengoMedidas.checked = false;

            tipoProductoDiv.style.display = "none";
            cantidadDiv.style.display = "none";
            contenedorCampos.innerHTML = "";

            datosCliente.style.display = "block";
            btnEnviar.style.display = "block";
        }
        actualizarValidaciones();
    });

    tipoProducto.addEventListener("change", () => {
        if (tipoProducto.value !== "") {
            cantidadDiv.style.display = "block";
        } else {
            cantidadDiv.style.display = "none";
            contenedorCampos.innerHTML = "";
        }
        generarCampos();
        actualizarValidaciones();
    });
    cantidad.addEventListener("change", () => {
        generarCampos();
        actualizarValidaciones();
    });

    tipoProducto.addEventListener("change", generarCampos);

    // --- ANTES DE ENVIAR: ACTIVAR TODO LO VISIBLE ---
    form.addEventListener("submit", () => {
        const elementos = document.querySelectorAll("input, select, textarea");

        elementos.forEach((el) => {
            if (el.offsetParent !== null) {
                el.disabled = false;
            }
        });
    });
});
