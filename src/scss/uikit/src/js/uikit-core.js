import UIkit from './api';
import Core from './core/core';
import boot from './api/boot';
import * as components from './core';
import {each} from './util/lang';

// register components
each(components, (component, name) =>
    UIkit.component(name, component)
);

// core functionality
UIkit.use(Core);

boot(UIkit);

export default UIkit;
