const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const { RichText, BlockControls, AlignmentToolbar } = wp.editor;

registerBlockType('block-examples/block04', {
	title: __('Controls Block'),
	icon: 'universal-access-alt',
	category: 'layout',
	attributes: {
		content: {
			type: 'array',
			source: 'children',
			selector: 'h1',
		},
		alignment: {
			type: 'string'
		}
	},
	edit: ({ className, attributes: { content, alignment } }) =>
	{
		const onChangeContent = content =>
		{
			setAttributes({ content: content });
		};

		const onChangeAlignment = newAlignment =>
		{
			setAttributes({ alignment: newAlignment });
		};

		return [
			<BlockControl>
				<AlignmentToolbar
					value={alignment}
					onChange={onChangeAlignment}
				/>
			</BlockControl>,

			<RichText
				tagName="h1"
				className={className}
				onChange={onChangeContent}
				value={content}
				style={{ textAlign: alignment }}
			/>

		];
	},
	save: ({ className, attributes: { content, alignment } }) =>
	{
		return (
			<RichText.Content
				tagName="p"
				className={className}
				value={content}
				style={{ textAlign: alignment }}
			/>
		);
	},
});
