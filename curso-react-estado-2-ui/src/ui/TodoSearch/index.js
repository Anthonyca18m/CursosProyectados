import React from 'react';
import './TodoSearch.css';

function TodoSearch({ searchValue, setSearchValue, loading, params, setParams }) {

  const onSearchValueChange = (event) => {
    setSearchValue(event.target.value);

    let params = {
      search: event.target.value,
    };
    setParams(params);
  };

  React.useEffect(() => {
    const search = params.get("search") || "";
    setSearchValue(search);
  }, [params]);

  return (
    <input
      className="TodoSearch"
      placeholder="Cebolla"
      value={searchValue}
      onChange={onSearchValueChange}
      disabled={loading}
    />
  );
}

export { TodoSearch };
