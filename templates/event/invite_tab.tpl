<div id="invite" class="tabs-content">
	<table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="5" data-pagination="#myTablePagination">
	<tbody>
		{foreach $non_invited as $non_inv}
		  <tr>
			<td >
				<div class="ink-grid">
					<div class="column-group horizontal-gutters">
						<div class="stacker-column" style="margin:2%">
							<img src="{$non_inv.photo}" width="50px" height="50px">
						</div>
						<div class="xlarge-50 large-50 medium-50 small-50 tiny-50 stacker-column push-left" style="margin-top:3%">
						  <a href="{$BASE_URL}pages/user/UserPage.php?id={$non_inv.idUser}">{$non_inv.name}</a>
						</div>
						<div class="push-right">
							<span class="ink-tooltip" data-tip-text="Invite" data-tip-color="grey" style="padding:4%">
								<i class="fa fa-plus-square-o" aria-hidden="true" onclick="addUser({$listID},{$non_inv.idUser})"></i>
							</span>
						</div>
					</div>
				</div>
			</td>
		  </tr>
		{/foreach}
	  </tbody>
	</table>
</div>