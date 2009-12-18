<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Last Modified By</th>
            <th>Published?</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pages as $page): ?>
        <tr>
            <td><?php echo html_escape($page->title) ; ?></td>
            <td><?php echo html_escape($page->slug); ?></td>
            <td><strong><?php echo html_escape($page->getModifiedByUser()->username); ?></strong> on <?php echo html_escape(date('M j, Y g:ia', strtotime($page->updated))); ?></td>
            <td><?php if ($page->is_published): ?>
            published [<a href="<?php echo html_escape(public_uri($page->slug)); ?>">view</a>]
            <?php else: ?>
            not published [<a href="<?php echo html_escape(public_uri($page->slug)); ?>">preview</a>]
            <?php endif; ?></td>
            <td><a class="edit" href="<?php echo html_escape(uri("simple-pages/index/edit/id/$page->id")) ?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>