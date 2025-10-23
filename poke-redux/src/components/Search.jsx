import { Input } from 'antd';

const Search = ({ onSearch }) => {
    return (
        <Input.Search
        placeholder="Search Pokémon"
        allowClear
        enterButton="Search"
        size="large"
        onSearch={onSearch}
        />
    );
}

export default Search;