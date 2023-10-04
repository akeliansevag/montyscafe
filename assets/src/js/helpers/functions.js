const getUrlPath = () => {
  let url = window.location.pathname;
  url = url.split("/");
  return url;
};

export { getUrlPath };
