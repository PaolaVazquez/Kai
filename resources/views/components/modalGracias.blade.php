@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let modal = new bootstrap.Modal(document.getElementById('modalGracias'));
        modal.show();
    });
</script>
@endif

<!-- Modal -->
<div class="modal fade" id="modalGracias" tabindex="-1" aria-labelledby="modalGraciasLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="modalGraciasLabel">¡Gracias!</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mb-0" style="font-size:18px;">
                    Nos contactaremos contigo lo más rápido posible.
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
