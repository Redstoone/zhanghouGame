import axios from 'axios'

let user = sessionStorage.getItem('user')
if (user) {
  user = JSON.parse(user)
}
const service = function (url, data, method = 'GET', headers = {}) {
  return new Promise((resolve, reject) => {
    let options = {
      'method': method,
      // 'url': url.indexOf('weixin') > 0 ? url : 'http://api.twyxedu.com' + process.env.BASE_API + url,
      'url': process.env.BASE_API + url,
      'headers': headers && typeof headers === 'object' ? headers : {}
    }
    options.headers['X-Requested-Page'] = 'json'
    options[method === 'GET' ? 'params' : 'data'] = data
    axios(options).then((response) => {
      resolve(response.data)
    }).catch((error) => {
      reject(error)
    })
  })
}

export default service
