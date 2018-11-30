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
            "When I drive a rental car, I don't know what's going on with it, right? So a lot of times I'll drive for, like, 10 miles with the emergency brake on. That doesn't say a lot for me, but it really doesn't say a lot for the emergency brake. It's really not an emergency brake, it's an emergency make-the-car-smell-funny lever."
        </div>;
    },
    // used in the frontend
    save()
    {
        return <div style={blockStyle}>
            My roommate said to me, "I'm gonna go shave and use the shower. Does anyone need to use the bathroom?" It's like some weird ass quiz where he reveals the answer first.        </div>;
    }
});