<div id="invited" class="tabs-content">
	<table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="" data-pagination="#myTablePagination">
	<tbody>
		{foreach $invited as $inv}
		  <tr>
			<td >
				<div class="ink-grid">
					<div class="column-group horizontal-gutters">
						<div class="stacker-column" style="margin:2%">
							<img src="{$inv.photo}" width="50px" height="50px">
						</div>
						<div class="xlarge-50 large-50 medium-50 small-50 tiny-50 stacker-column push-left" style="margin-top:3%">
						  <a href="{$BASE_URL}pages/user/UserPage.php?id={$inv.idUser}">{$inv.name}</a>
						</div>
						{if $is_owner == "true"}
						<div class="push-right" style="margin-top:3%">
							<span class="ink-tooltip" data-tip-text="Uninvite" data-tip-color="grey">
								<a href="../../actions/events/uninvite.php?idUser={$inv.idUser}&idEvent={$event.idEvent}"> <img src="../../images/assets/x_button.png" style="height:20px;width:20px"> </a>
							</span>
						</div>
						{/if}
					</div>
				</div>
			</td>
		  </tr>
		{/foreach}
	  </tbody>
	</table>
</div>