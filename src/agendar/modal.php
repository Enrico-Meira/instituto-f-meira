<div class="modal fade" id="agenda_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="modalLabel">Para efetuar agendamento, Confirme os dados!</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
			</div>
			<div class="modal-body">
				<div class="procedimento">Procedimento: <?php view($_SESSION['id_proced']); echo $nomeProcedimento['procedimento'];?></div> 
				<div class="data"> </div>
			</div>
			<div class="modal-footer">
				<a id="confirm" class="btn btn-dark" href="#" onclick="confirmar()"> Confirmar</a>
				<a id="cancel" class="btn btn-secondary" data-bs-dismiss="modal"> Cancelar</a>
			</div>
		</div>
	</div>
</div>

