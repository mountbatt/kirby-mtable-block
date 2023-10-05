panel.plugin("mountbatt/mtable-block", {
  blocks: {
    mtable: `
      	<div @dblclick="open">
		    <template v-if="content.mtable.length === 0">
					<span class="k-text" v-text="$t('field.blocks.mtable.empty')"></span>
		    </template>
		    <template v-else>
						<span v-if="content.headline.length != 0">
							<div class="k-text"><strong>{{ content.headline }}</strong><div>
							<hr><br>
						</span>
						<div class="k-table">
		        <table>
							<tbody>
							<tr v-for="item in content.mtable">
								<td class="k-table-cell k-table-column" style="width: auto;">{{ item.first }}</td>
								<td v-if="content.columns >= '2'" class="k-table-cell k-table-column" style="width: auto;">{{ item.second }}</td>
								<td v-if="content.columns >= '3'" class="k-table-cell k-table-column" style="width: auto;">{{ item.last }}</td>	
							</tr>
							</tbody>
		        </table>
						</div>
		    </template>
		</div>
    `
  }
});