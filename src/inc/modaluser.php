<!-- Modal do Login-->
<div class="modal fade" id="logoutmodal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modalLabel">Sair</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
			</div>
			<div class="modal-body">
				Deseja realmente sair?
			</div>
			<div class="modal-footer">
				<a id="confirm" class="btn btn-dark" href="<?php echo baseurl; ?>/src/inc/logout.php"><i class="fa-solid fa-right-from-bracket"></i></i> Sim</a>
				<a id="cancel" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Não</a>
			</div>
		</div>
	</div>
</div>
<!-- Modal do Login-->