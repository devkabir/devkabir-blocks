const { registerBlockType } = wp.blocks;
const { apiFetch } = wp;

registerBlockType('my-block/posts-list', {
    title: 'Posts List',
    icon: 'admin-post',
    category: 'widgets',

    edit: function (props) {
        return (
            <div className={props.className}>
                <p>Posts List block</p>
            </div>
        );
    },

    save: function (props) {
        return (
            <div className={props.className}>
                <ul>
                    {props.attributes.posts.map(post => (
                        <li key={post.id}>{post.title.rendered}</li>
                    ))}
                </ul>
            </div>
        );
    },

    attributes: {
        posts: {
            type: 'array',
            default: [],
        },
    },
});
