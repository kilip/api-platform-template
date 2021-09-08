import { mount } from '@vue/test-utils'
import Tutorial from "~/components/Tutorial";

describe('NuxtTutorial', () => {
  test('is a Vue instance', () => {
    const wrapper = mount(Tutorial)
    expect(wrapper.vm).toBeTruthy()
    expect(wrapper.html()).toContain('Hello World');
  })
})
