import makeService from "~/utils/service";
import makeCrudModule from "~/utils/crud";

const userService = makeService('/users');
export default makeCrudModule({
  service: userService
});
