<div id="invite" class="tabs-content">
	<form class="ink-form all-100" method="post" action="../../actions/events/inviteUsers.php">
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
							<div class="push-right" style="margin-top:3%">
								<span class="ink-tooltip" data-tip-text="Invite" data-tip-color="grey" >
									<input type="checkbox" name="invite[]" value="{$non_inv.idUser}">
								</span>
							</div>
						</div>
					</div>
				</td>
			  </tr>
			{/foreach}
		  </tbody>
		</table>
		<hr>
		<div class="all-100" >
			<button class="ink-button blue push-center" type="submit" value="Submit">Invite</button>
		</div>
		<input type="hidden" name="idEvent" value="{$event.idEvent}">
	</form>
</div>