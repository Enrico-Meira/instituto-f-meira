<div class="modal fade" id="agenda_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modalLabel">Confirme os dados!</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
			</div>
			<div class="modal-body">
				Efetuar agendamento?
			</div>
			<div class="modal-footer">
				<a id="confirm" class="btn btn-dark" href="<?php echo baseurl; ?>/index.php" onclick="confirmar()"><i class="fa-solid fa-right-from-bracket"></i> Confirmar</a>
				<a id="cancel" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancelar</a>
			</div>
		</div>
	</div>
</div>