GET: `api.domain.com/api/testget`  
Expected response: "success"  
Expected Cookies:  
```
Set-Cookie: admin.domain.com=admin.domain.com; expires=...; Max-Age=3600; path=/; domain=admin.domain.com
Set-Cookie: domain.com=domain.com; expires=...; Max-Age=3600; path=/; domain=domain.com
Set-Cookie: .domain.com=.domain.com; expires=...; Max-Age=3600; path=/; domain=.domain.com
```
POST: `api.domain.com/api/testpost`  
Expected response: "success"  
Expected Cookies:  
```
Set-Cookie: admin.domain.com=admin.domain.com; expires=...; Max-Age=3600; path=/; domain=admin.domain.com
Set-Cookie: domain.com=domain.com; expires=...; Max-Age=3600; path=/; domain=domain.com
Set-Cookie: .domain.com=.domain.com; expires=...; Max-Age=3600; path=/; domain=.domain.com
```
