import Component from 'build/wrapper/component.js';

if (typeof window !== 'undefined' && window.UIkit) {
    window.UIkit.component(NAME, Component);
}

export default Component;
