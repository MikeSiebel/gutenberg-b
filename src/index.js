import { registerBlockType } from "@wordpress/blocks";

registerBlockType("msiebel/myblock", {
  edit: function () {
    return <h1 className="admin_title">Edit 5</h1>;
  },
  save: function () {
    return <h1 className="front_title">Save 7</h1>;
  },
});
