const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;

// my - plugin / block - name
registerBlockType('block-examples/block02', {
    title: __('Stylesheets Block'),
    icon: 'universal-access-alt',
    category: 'layout',
    // used in editor
    edit: ({ className }) =>
    {
        return (
            <p className="hedberg">
                {__('I hate turkeys. If you stand in the meat section at the grocery store long enough, you start to get mad a turkeys. There\'s turkey ham, turkey bologna, turkey pastromi,.Some one needs to tell the turkey, man, just be yourself.')}
            </p>
        );
    },
    // used in the frontend
    save: ({ className }) =>
    {
        return (

            <p className="hedberg">
                {__('One time a guy handed me a picture. He said, \'Here\'s a picture of me when I was younger.\' Every picture is of you when you were younger. \'Here\'s a picture of me when I\'m older.\' \'You son of bitch, how\'d you pull that off? Let me see that camera. What\'s it look like?')}
            </p>

        );
    }
});