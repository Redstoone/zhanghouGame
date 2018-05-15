import qs from 'qs'
import service from './fetch.js'

export const typewww = 'application/x-www-form-urlencoded'

export default {
  siginUp (params) {
    return service(`/api/signup`, qs.stringify(params), 'POST', {
      'Content-Type': typewww
    })
  }
}
