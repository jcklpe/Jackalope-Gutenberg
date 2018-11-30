const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;

const blockStyle = {
    background: 'blue',
    color: 'white',
    padding: '25px'
}

// my-plugin/block-name
registerBlockType('block-examples/block-examples-01-basic-block', {
    title: __('Basic Block'),
    icon: 'universal-access-alt',
    category: 'layout',
    // used in editor
    edit()
    {
        return <div style={blockStyle}>
            I HATE YOU FARTBABY!
        </div>;
    },
    // used in the frontend
    save()
    {
        return <div style={blockStyle}>
            That ain't so bad
        </div>;
    }
});