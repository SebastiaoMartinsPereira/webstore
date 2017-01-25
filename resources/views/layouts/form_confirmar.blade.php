
<!-- Modal -->
<div class="modal fade" id="modalConfirmacao" tabindex="-1" role="dialog" aria-labelledby="modalConfirmacaoLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalConfirmacaoLabel">{{$cabecalho}}</h4>
      </div>
      <div class="modal-body">
          {{$msg}}
      </div>
      <div class="modal-footer">
        <button id="form_confirmar_btn1" type="button" class="btn btn-default" data-dismiss="modal">{{$btn1msg}}</button>
        <button id="form_confirmar_btn2" onclick={{$evtclick}} type="button" class="btn btn-primary">{{$btn2Msg}}</button>
      </div>
    </div>
  </div>
</div>
