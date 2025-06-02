<?php if (!empty($logs)): ?>
	<hr>
	<table class="logs-table">
		<thead>
			<tr>
				<th>№</th>
				<th>Дата/время</th>
				<th>IP-адрес</th>
				<th>Откуда (referer)</th>
				<th>Куда (uri)</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($logs as $id => $log): ?>
			<tr>
				<td><?=($id + 1)?></td>
				<td><?=$log['dt']?></td>
				<td><?=$log['ip']?></td>
				<td class="<?=$log['referer_danger'] === 0 ? '' : 'danger' ?>"><?=$log['referer']?></td>
				<td class="<?=$log['uri_danger'] === 0 ? '' : 'danger' ?>"><?=$log['uri']?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php else: ?>
	<p class="no-data">Данные отсутствуют.</p>
<?php endif; ?>