const { registerBlockType } = wp.blocks

registerBlockType('oak-labs-gutenberg/hello-world', {
    title:      'Oak Labs Hello World',
    icon:       'smiley',
    category:   'common',
    edit() {
        return <pre>Hello World</pre>
    },
    save() {
        return <pre>Hello World</pre>
    }
})
